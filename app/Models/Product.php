<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes; 

    public $timestamps = false;

    protected $guarded = [''];

    public function supplier(){

        return $this->belongsTo(Supplier::class);
    }

    public function orderitems(){

        return $this->hasMany(Orderitem::class);

    }


}
