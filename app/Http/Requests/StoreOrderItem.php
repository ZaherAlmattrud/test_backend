<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderItem extends FormRequest
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
            

            'order_id'=>'required|exists:orders,id',

            'product_id'=>'required|exists:products,id',

        //    'UnitPrice'=>'required|numeric' ,

            'Quantity' => 'required|numeric',
          
        ];
    }

    public function messages()
    {

        return [

            'order_id.required' => __('messages.roles.required'),

            'order_id.exists' => __('messages.roles.exists'),

            'product_id.required' => __('messages.roles.required'),

            'product_id.exists' => __('messages.roles.exists'),

            // 'UnitPrice.required' => __('messages.roles.required'),

            // 'UnitPrice.numeric' => __('messages.roles.numeric'),

            'Quantity.required' => __('messages.roles.required'),

            'Quantity.numeric' => __('messages.roles.numeric'),
           
        ];

     }
}
