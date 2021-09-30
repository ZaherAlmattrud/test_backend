<?php

namespace App\Repositories\Eloquent;

use App\Models\Customer;

use App\Repositories\IRepositories\ICustomerRepository;

class CustomerRepository implements ICustomerRepository
{
    protected $customer = null;

    public function index(){

        return customer::all();

    }

    public function store( $collection = [] ){

       
        $customer = new customer;

        $customer->FirstName = $collection['FirstName'];

        $customer->LastName = $collection['LastName'];

        $customer->City = $collection['City'];

        $customer->Country = $collection['Country'];

        $customer->Phone = $collection['Phone'];

        $customer->save();

        return $customer ;

    }

    public function show($id){

        return Customer::findOrFail($id);

    }

    public function update($id , $collection = [] ){

        // find resource

        $customer = Customer::findOrFail($id);

        // Update only passed descriptor values

        $customer->update($collection);

        $customer->save();

        return $customer ;

    }

    public function destroy($id){

        Customer::destroy($id);
        
    }


}