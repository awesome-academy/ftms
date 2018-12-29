<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ];
    }

    public function messages()
    {
        return [
            'old_password.required' => trans('profile.old_password_required'),
            'new_password.required' => trans('profile.new_password_required'),
            'confirm_password.required' => trans('profile.confirm_password_required'),
            'confirm_password.same' => trans('profile.confirm_password_same'),
            'new_password.min' => trans('profile.new_password_min'),
        ];
    }
}
