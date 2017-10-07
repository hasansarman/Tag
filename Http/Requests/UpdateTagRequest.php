<?php

namespace Modules\Tag\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class UpdateTagRequest extends BaseFormRequest
{
    public function translationRules()
    {
        return [
            'SLUG' => 'required',
            'NAME' => 'required',
        ];
    }

    public function rules()
    {
        return [
            'NAMESPACE' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [];
    }
}
