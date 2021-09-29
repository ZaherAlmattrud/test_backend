<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $order_1 = Order::create([

           "OrderDate"=>"2020-7-5" ,
           "OrderNumber"=>"5" ,
           "CustomerId"=>1,
           "TotalAmount"=>1000,
           
        ]);

        $order_2 = Order::create([

            "OrderDate"=>"2020-8-14" ,
            "OrderNumber"=>"8" ,
            "CustomerId"=>2,
            "TotalAmount"=>600,
            
         ]);
    }
}
