<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\OrderItem ;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $orderitem_1 = OrderItem::create([

            "OrderId"=>1 ,

            "ProductId"=>4 ,

            "UnitPrice"=>500,

            "Quantity"=>2 ,
        ]);


        $orderitem_2 = OrderItem::create([

            "OrderId"=>2 ,

            "ProductId"=>3 ,

            "UnitPrice"=>300,

            "Quantity"=>1 ,

        ]);

        $orderitem_2 = OrderItem::create([

            "OrderId"=>2 ,

            "ProductId"=>2 ,

            "UnitPrice"=>300,

            "Quantity"=>1 ,
            
        ]);
    }
}
