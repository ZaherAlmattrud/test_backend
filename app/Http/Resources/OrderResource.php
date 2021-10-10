<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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

            'ID'=>$this->id,
            
            'OrderDate' => $this->OrderDate,

            'OrderNumber' => $this->OrderNumber,

            'customer_id' => $this->customer_id,

            'TotalAmount' => $this->TotalAmount(),

       ];
    }
}
