<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotebookCreateRequest extends FormRequest
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
            // validation rules for storing notebooks inside the database
            'name' => 'required|max:40'
        ];
    }

    /**
     * Get the validation massage that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.max' => 'Notebook name should not be greater than 40 characters'
        ];
    }
}
