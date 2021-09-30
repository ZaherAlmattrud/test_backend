<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemResource extends JsonResource
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
            
            'OrderId' => $this->OrderId,

            'ProductId' => $this->ProductId,

            'UnitPrice' => $this->UnitPrice,

            'Quantity' => $this->Quantity,
     

       ];
    }
}
