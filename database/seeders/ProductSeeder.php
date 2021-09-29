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

            "SupplierId"=>1,

            "UnitPrice"=>150,

        ]);

        $product_2 = Product::create([


            "ProductName"=>"Rice",

            "SupplierId"=>1,

            "UnitPrice"=>300,

        ]);

        $product_3 = Product::create([


            "ProductName"=>"Sugar",

            "SupplierId"=>2,

            "UnitPrice"=>250,

        ]);

        $product_4 = Product::create([


            "ProductName"=>"Biscuit",

            "SupplierId"=>3,

            "UnitPrice"=>500,

        ]);
    }
}
