<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use HasFactory;
    use SoftDeletes; 

    public $timestamps = false;

   // protected $primaryKey = 'SupplierId';

    // (notes)

    //  fillable attributes are used to specify those fields which are to be mass assigned.

    protected $fillable = ['CompanyName','ContactName','City','Country','Phone','Fax','deleted_at' ,'updated_at','created_at'];

    //  Guarded attributes are used to specify those fields which are not mass assignable.

    protected $guarded = [''];


    public function products(){

         return $this->hasMany(Product::class);
    }


}
