<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|email|max:100',
            'password' => 'max:255|required|confirmed',
            'name' => 'required|max:255',
            'address' => 'max:255',
            'phone' => 'max:15',
        ];
    }

    public function messages()
    {
        return [
            'email.required' =>  trans('user.email_required'),
            'email.email' => trans('user.email_email'),
            'email.max' => trans('user.email_max'),
            'password.required' => trans('user.password_required'),
            'password.confirmed' => trans('user.password_confirmed'),
            'name.required' => trans('user.name_required'),
            'name.max' => trans('user.name_max'),
            'address.max' => trans('user.address_max'),
            'phone.max' => trans('user.phone_max'),
        ];
    }
}
