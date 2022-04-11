<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInfoRequest;
use App\Http\Requests\UpdateInfoRequest;
use App\Http\Resources\Admin\InfoResource;
use App\Models\Info;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class InfoApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('info_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InfoResource(Info::advancedFilter());
    }

    public function store(StoreInfoRequest $request)
    {
        $info = Info::create($request->validated());

        if ($media = $request->input('files_related_to_task', [])) {
            Media::whereIn('id', data_get($media, '*.id'))
                ->where('model_id', 0)
                ->update(['model_id' => $info->id]);
        }

        return (new InfoResource($info))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('info_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [],
        ]);
    }

    public function show(Info $info)
    {
        abort_if(Gate::denies('info_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InfoResource($info);
    }

    public function update(UpdateInfoRequest $request, Info $info)
    {
        $info->update($request->validated());

        $info->updateMedia($request->input('files_related_to_task', []), 'info_files_related_to_task');

        return (new InfoResource($info))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Info $info)
    {
        abort_if(Gate::denies('info_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new InfoResource($info),
            'meta' => [],
        ]);
    }

    public function destroy(Info $info)
    {
        abort_if(Gate::denies('info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $info->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['info_create', 'info_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }

        $model         = new Info();
        $model->id     = $request->input('model_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));

        return response()->json($media, Response::HTTP_CREATED);
    }
}
