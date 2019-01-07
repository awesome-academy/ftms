<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
            'name' => 'required|max:100',
            'description' => 'required|max:200'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('subject.name_required'),
            'name.max' => trans('subject.name_max'),
            'description.required' => trans('subject.name_required'),
            'description.max' => trans('subject.name_max')
        ];
    }
}
