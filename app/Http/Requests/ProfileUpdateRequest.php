<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:25',
            'email' => 'required|email:rfc,dns',
            'image' => 'required|max:2000',
        ];
    }
    public function messages()
    {
        return [
            'name.max' => 'Profile Name should not be greater then 25',
            'image.max' => 'Profile Image should not be greater then 2MB'
        ];
    }
}
