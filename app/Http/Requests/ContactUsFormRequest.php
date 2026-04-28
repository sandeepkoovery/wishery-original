<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsFormRequest extends FormRequest
{
    public function authorize()
    {
        return true; // set to true unless you want extra auth checks
    }

    public function rules()
    {
        return [
            'name' => ['required','string','max:100'],
            'phone' => ['required','string','max:20','regex:/^[0-9+\-\s]{7,20}$/'],
            'email' => ['required','email','max:150'],
            'message' => ['required','string','max:150'],
        ];
    }

    public function messages()
    {
        return [
            'phone.regex' => 'Phone must be numeric and may include +, -, spaces (7-20 chars).',
        ];
    }
}
