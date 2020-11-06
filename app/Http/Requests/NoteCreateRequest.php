<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteCreateRequest extends FormRequest
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
            // validation rules for storing notes inside the database
            'title' => 'required|max:20|unique:notes,title',
            'body' => 'required|min:50'
        ];
    }

    /**
     * Get the validation message that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        // validation messages for storing notes inside the database
        return [
            'title.max' => 'Note name should not be greater than 20 characters'
        ];
    }
}
