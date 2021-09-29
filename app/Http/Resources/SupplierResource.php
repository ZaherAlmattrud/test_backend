<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SupplierResource extends JsonResource
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
            
             'id' => $this->id,

             'CompanyName'=>$this->CompanyName,

             'ContactName'=>$this->ContactName,

             'City'=>$this->Country,

             'Phone'=>$this->Phone,

             'Fax'=>$this->Fax

        ];
    }
}
