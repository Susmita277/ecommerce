<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FrontendContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'email:strict|required',
            'textarea' => 'required',
        ];
    }

    public function messages(): array {
        return [
        'name.required' => 'आफ्नो नाम लेख्न बिर्सनुभयो',
        'email.requred' => 'Email khoi ta haleko',
        'email.email' => 'Email lekhnu parne ho sir',
        'textarea.required' => 'हामीलाई आफ्नो प्रतिक्रिया दिनुहोस्',
        ];
    }
}
