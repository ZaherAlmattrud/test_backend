<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomer extends FormRequest
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
            

            'FirstName'  => 'required|string' ,

            'LastName'  => 'required|string' ,

            'City'  => 'required|string' ,

            'Country'  => 'required|string' ,

            'Phone'  => 'required|numeric' ,

        ];
    }

    public function messages()
    {

        return [

            'FirstName.required' => __('messages.roles.required'),

            'FirstName.string' => __('messages.roles.string'),

            'LastName.required' => __('messages.roles.required'),

            'LastName.string' => __('messages.roles.string'),

            'City.required' => __('messages.roles.required'),

            'City.string' => __('messages.roles.string'),

            'Country.required' => __('messages.roles.required'),

            'Country.string' => __('messages.roles.string'),

            'Phone.required' => __('messages.roles.required'),

            'Phone.string' => __('messages.roles.numeric'),
        
        ];

     }
}
