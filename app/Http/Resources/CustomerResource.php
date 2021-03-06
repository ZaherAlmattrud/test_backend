<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       
        return [

            'ID'=>$this->id ,
            
            'FirstName' => $this->FirstName,

            'LastName' => $this->LastName,

            'City' => $this->City,

            'Country' => $this->Country,

            'Phone' => $this->Phone,

            'FullName'=>$this->FirstName .' '.$this->LastName,

       ];

       
    }
}
