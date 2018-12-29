<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'new_avatar' => 'image|max:1024',
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
        ];
    }
}
