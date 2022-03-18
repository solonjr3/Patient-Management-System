<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicineValidation extends FormRequest
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
            'medicine_name' => 'required',
            'medicine_quantity' => 'required',
            // 'medicine_date'=>'required',
        ];
    }

    public function messages()
    {
        return [
            
            'medicine_name.required' => 'This field is required',
            'medicine_quantity.required' => 'Number of medicine arrived is required',
            // 'medicine_date.required' => 'The date is required',

        ];
    }
}
