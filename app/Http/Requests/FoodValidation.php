<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodValidation extends FormRequest
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
            'food_category' => 'required',
            'food_allocated' => 'required',
            // 'food_date'=>'required',
        ];
    }

    public function messages()
    {
        return [
            
            'food_category.required' => 'This field is required',
            'food_allocated.required' => 'Number of food arrived is required',
            // 'food_date.required' => 'The date is required',

        ];
    }
}
