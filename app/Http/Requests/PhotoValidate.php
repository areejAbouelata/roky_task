<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoValidate extends FormRequest
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
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg'

        ];
    }

    public function messages()
    {
        
        return [
            'photo.required' => 'photo is required'  ,
            'photo.mimes' => 'photo available extensions are jpeg,png,jpg,gif,svg'  ,

        ];
    }
}
