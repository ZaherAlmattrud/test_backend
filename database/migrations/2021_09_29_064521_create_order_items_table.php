<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id');

            $table->foreignId('product_id');

            $table->decimal('UnitPrice', 12, 2);

            // (notes)

            // use : ->unsigned() 

            // Because of the minus sign when integer can be signed.

            // Unsigned integers will have 10 digits, and its display length is therefore - 10.

             // Signed integers will require a space for the minus sign, if it's negative. Therefore, on top of 10 digits, you need another one for the sign

            $table->integer('Quantity')->unsigned();

            $table->softDeletes();

         //   $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
