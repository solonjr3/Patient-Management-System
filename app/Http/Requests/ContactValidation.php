<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactValidation extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required|max:250',
        ];
    }
    
    public function messages()
    {
        return [
            
            'name.required' => 'Your name is required',
            'email.required' => 'Your email is required',
            'subject.required' => 'The subject is required',
            'message.required' => 'Your Message is required',
        ];
    }
}
