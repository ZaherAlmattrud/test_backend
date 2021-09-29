<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $supplier_1 = Supplier::create([

            'CompanyName'=>'SwafTech' ,

            'ContactName'=>'Ahmad' ,

            'City'=>'Damascus' ,

            'Country'=>'Syria' ,

            'Phone'=>'33324587' ,

            'Fax'=>'33324588' ,

        ]);

        $supplier_2 = Supplier::create([

            'CompanyName'=>'Durra' ,

            'ContactName'=>'سعيد' ,

            'City'=>'دمشق' ,

            'Country'=>'سوريا' ,

            'Phone'=>'011385545' ,

            'Fax'=>null ,

        ]);

        
        $supplier_3 = Supplier::create([

            'CompanyName'=>'كهربائيات المصري' ,

            'ContactName'=>'محمود' ,

            'City'=>'حلب' ,

            'Country'=>'سوريا' ,

            'Phone'=>null ,

            'Fax'=>null ,

        ]);
    }
}
