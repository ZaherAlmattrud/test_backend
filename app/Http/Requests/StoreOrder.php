<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrder extends FormRequest
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
            

            'OrderDate'  => 'required|date' ,

            'OrderNumber'=>'required|numeric' ,

            'customer_id' => 'required|exists:customers,id',
          
        ];
    }

    public function messages()
    {

        return [

            'OrderDate.required' => __('messages.roles.required'),

            'OrderDate.date' => __('messages.roles.date'),

            'OrderNumber.required'=> __('messages.roles.required'),

            'OrderNumber.numeric'=> __('messages.roles.numeric'),

            'customer_id.required'=> __('messages.roles.required'),

            'customer_id.exists'=> __('messages.roles.exists'),
        
        ];

     }
}
