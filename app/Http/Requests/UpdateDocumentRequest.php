<?php

namespace App\Http\Requests;

use App\Models\Document;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDocumentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('document_edit');
    }

    public function rules()
    {
        return [
            'created_by' => [
                'string',
                'nullable',
            ],
            'reason_for_upload' => [
                'string',
                'nullable',
            ],
            'files' => [
                'array',
                'nullable',
            ],
            'files.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
