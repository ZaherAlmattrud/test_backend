<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $customer_1 = Customer::create([

            'FirstName'=>'Mohamad' ,

            'LastName'=>'Zid' ,

            'City'=>'Beirut' ,

            'Country'=>'Lebanon' ,

            'Phone'=>'02015485546' ,

        ]);

        $customer_2 = Customer::create([

            'FirstName'=>'Samer' ,

            'LastName'=>'Salam' ,

            'City'=>'Damascus' ,

            'Country'=>'Syria' ,

            'Phone'=>'555456687' ,

        ]);
    }
}
