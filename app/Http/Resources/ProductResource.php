<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'ProductName' => $this->ProductName,

            'supplier_id' => $this->supplier_id,

            'UnitPrice' => $this->UnitPrice, 

       ];
    }
}
