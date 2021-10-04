<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            

            'ProductName'  => 'required|string' ,

            'SupplierId' => 'required|exists:suppliers,id',

            'UnitPrice'=>'required|numeric'
          
        ];
    }

    public function messages()
    {

        return [

            'CompanyName.required' => __('messages.roles.required'),

            'SupplierId.required' => __('messages.roles.required'),

            'SupplierId.exists' => __('messages.roles.exists'),

            'UnitPrice.required'=> __('messages.roles.required')  ,

            'UnitPrice.numeric'=> __('messages.roles.numeric') ,

        
        ];

     }
}
