<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            
            $table->id();

            // (notes )

            // DATETIME vs TIMESTAMP

            // DATETIME and TIMESTAMP have a lot of similarities but the difference itself lies outside Laravel and more in MySQL.

            // Their major difference is the range. For DateTime its up to year 9999 while for timestamp its only up to year 2038. Other differences include the amount of bytes needed to store each
         
            $table->date('OrderDate')->format('d.m.Y');

            $table->string('OrderNumber',10);

            $table->foreignId('customer_id');

           
            // calculated value
             $table->decimal('TotalAmount', 12, 2)->nullable();

            $table->softDeletes();

          //  $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
