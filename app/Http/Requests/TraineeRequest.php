<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TraineeRequest extends FormRequest
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
            'address' => 'required|max:255',
            'phone' => 'required|max:12',
            'password' => 'required|max:12',
            'new_avatar' => 'image|max:1024',
            'email' => 'required|unique:users|max:30'
        ];
    }


    public function messages()
    {
        return [
            'name.required' => trans('profile.name_required'),
            'address.required' => trans('profile.address_required'),
            'phone.required' => trans('profile.phone_required'),
            'name.max' => trans('profile.name_max'),
            'address.max' => trans('profile.address_max'),
            'phone.max' => trans('profile.phone_max'),
            'new_avatar.max' => trans('profile.image_max'),
            'password.required' => trans('profile.password_required'),
            'password.max' => trans('profile.password_max'),
            'email.required' => trans('profile.email_required'),
            'email.max' => trans('profile.email_required')
        ];
    }
}
