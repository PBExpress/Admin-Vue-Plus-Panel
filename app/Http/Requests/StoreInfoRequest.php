<?php

namespace App\Http\Requests;

use App\Models\Info;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInfoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('info_create');
    }

    public function rules()
    {
        return [
            'name_of_tasks' => [
                'string',
                'nullable',
            ],
            'description_of_tasks' => [
                'string',
                'nullable',
            ],
            'name_created_by' => [
                'string',
                'nullable',
            ],
            'files_related_to_task' => [
                'array',
                'nullable',
            ],
            'files_related_to_task.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
