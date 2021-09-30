<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes; 

    public $timestamps = false;

   // protected $primaryKey = 'OrderId';

    

    protected $guarded = [''];


    public function customer(){

        return $this->belongsTo(Customer::class);

    }

    public function orderitems(){

        return $this->hasMany(Orderitem::class);

    }

    public function TotalAmount(){

          $totalAmount = 0;

        foreach ($this->orderitems as $orderItem) {

 
         $totalAmount = $totalAmount + (  $orderItem->UnitPrice *  $orderItem->Quantity) ;

        }

          return $totalAmount;


         
    }


}
