<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'title' => 'required|max:191',
            'description' => 'required'
        ];
    }

    public function messages(){
        return [
            'title.required'  =>  trans('home.TitleReq'),
            'title.max'  =>  trans('home.TitleMax'),
            'description.required'  =>  trans('home.DescriptionReq')
        ];
    }
}
