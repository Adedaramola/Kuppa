<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterUserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'phone' => 'required|string|min:11|unique:users',
            'password' => [
                'required',
                'string',
                'max:255',
                Password::min(8)
                    ->mixedCase(),
            ],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Please enter your email',
            'email.unique' => 'Account with this email exists already',
            'phone.min' => 'Please check the phone number',
            'phone.unique' => 'Account with this phone number exists already',
            'password.required' => 'Please enter your password',
        ];
    }
}
