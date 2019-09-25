<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class LoginClientValidation extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'email is required' ,
            'password.required' => 'password is required' ,
            'email.email' =>' it should be email' ,
            'email.unique' => 'this mail is used'
        ];
    }
}
