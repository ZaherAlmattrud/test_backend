<?php

// use App\Http\Requests\StoreSupplier
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplier extends FormRequest
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
            

            'CompanyName'  => 'required|string' ,

            'ContactName'  => 'required|string' ,

            'City'  => 'required|string' ,

            'Country'  => 'required|string' ,
        ];
    }

    public function messages()
    {

        return [

            'CompanyName.required' => __('messages.roles.required'),

            'CompanyName.string' =>__('messages.roles.string'),

            'ContactName.required' =>__('messages.roles.required'),

            'ContactName.string' =>__('messages.roles.string'),

            'City.required' =>__('messages.roles.required'),

            'City.string' =>__('messages.roles.string'),

            'Country.required' =>__('messages.roles.required'),

            'Country.string' =>__('messages.roles.string'),
         
        ];

     }
}
