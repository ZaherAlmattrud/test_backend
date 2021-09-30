<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $product_1 = Product::create([


            "ProductName"=>"Chai",

            "supplier_id"=>1,

            "UnitPrice"=>150,

        ]);

        $product_2 = Product::create([


            "ProductName"=>"Rice",

            "supplier_id"=>1,

            "UnitPrice"=>300,

        ]);

        $product_3 = Product::create([


            "ProductName"=>"Sugar",

            "supplier_id"=>2,

            "UnitPrice"=>250,

        ]);

        $product_4 = Product::create([


            "ProductName"=>"Biscuit",

            "supplier_id"=>3,

            "UnitPrice"=>500,

        ]);
    }
}
