<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {

            $table->id();

            // ( Notes )

            // nvarchar : It's for SQL server. You can't have nvarchar in mysql , in For nvarchar('Column name' , 'length') use this string( 'Column name' , 'length' )
            
            // Varchar Vs NVarchar
           
            // We can write only ASCII values in Varchar. ASCII values can only represent 256 characters. Like Capital A-Z, Small a-z, numbers from 0–9
          
            // where as in NVarchar we can write ASCII values and special characters . Unicode values can represent more than 256 ASCII characters. Like Capital A-Z, Small a-z, number from 0–9 and special characters like Chinese or Japanese characters
           
            $table->string('CompanyName',40);

            $table->string('ContactName',50);

            $table->string('City',40);

            $table->string('Country',40);

            $table->string('Phone',30);

            $table->string('Fax',30);


            // ( notes )

            // soft delete is used for deleting record visually that means you can’t see the record on your front-end but those records not actually removed from the database.

            $table->softDeletes();

        //    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
