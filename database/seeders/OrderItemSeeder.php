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

            "order_id"=>1 ,

            "product_id"=>4 ,

            "UnitPrice"=>500,

            "Quantity"=>2 ,
        ]);


        $orderitem_2 = OrderItem::create([

            "order_id"=>2 ,

            "product_id"=>3 ,

            "UnitPrice"=>300,

            "Quantity"=>1 ,

        ]);

        $orderitem_2 = OrderItem::create([

            "order_id"=>2 ,

            "product_id"=>2 ,

            "UnitPrice"=>300,

            "Quantity"=>1 ,
            
        ]);
    }
}
