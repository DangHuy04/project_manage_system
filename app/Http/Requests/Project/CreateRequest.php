<?php

namespace App\Http\Requests\Project;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'project' => [
                'bail',
                'required',
                'string',
                'unique:App\Models\Project,project'
            ],
            'description' => [
                'bail',
                'required',
            ],
            'deadline' => [
                'bail',
                'required',
                'after:today'
            ],
            'userid' => [
                'bail',
                'required',
                'gt:0',
            ],
        ];
    }

    public function messages() : array
    {
        return [
            'required' => ':attribute is required',
            'gt' => ':attribute must be chosen', 
        ];
    }
    public function attributes() : array
    {
        return [
            'project' => 'Project\'s Name',
            'description' => 'Description',
            'deadline' => 'Deadline',
            'userid' => 'Admin'
        ];
    }
}
