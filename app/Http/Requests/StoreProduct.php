<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;

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

            'supplier_id' => 'required|exists:suppliers,id',

            'UnitPrice'=>'required|numeric'
          
        ];
    }

    public function messages()
    {

        return [

            'CompanyName.required' => __('messages.roles.required'),

            'supplier_id.required' => __('messages.roles.required'),

            'supplier_id.exists' => __('messages.roles.exists'),

            'UnitPrice.required'=> __('messages.roles.required')  ,

            'UnitPrice.numeric'=> __('messages.roles.numeric') ,

        
        ];

     }

     protected function failedValidation(Validator $validator)
     {
         $errors = $validator->errors();
     
         $response = response()->json([
             'message' => 'Invalid data send',
             'details' => $errors->messages(),
         ], 422);
     
         throw new HttpResponseException($response);
     }

}
