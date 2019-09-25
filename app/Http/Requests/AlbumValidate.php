<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumValidate extends FormRequest
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
            'name' => 'required' ,
            'type' => 'required|in:public,privet' ,
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'name of album is required' ,
            'type.required' => 'Album type is required'  ,
            'type.in' => 'Album should be in private or public' ,
            'cover.required' => 'album cover is required' ,
            'cover.image' => 'album cover should be image ' ,

        ]   ;
    }
}
