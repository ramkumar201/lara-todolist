<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoCreateRequest extends FormRequest
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
            'title' => 'required|max:255',
            'decr' => 'required|max:255',
        ];
    }
    public function messages()
    {
        return [
            'title.max' => 'Todo title should not be greater then 255',
            'decr.max' => 'Todo Description should not be greater then 255',
        ];
    }
}
