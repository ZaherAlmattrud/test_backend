<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

use App\Http\Controllers\BaseController ;

use App\Repositories\IRepositories\ICustomerRepository;

use App\Http\Resources\CustomerResource;

use App\Http\Requests\StoreCustomer;

class CustomerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $customer;


    public function __construct(ICustomerRepository $customer)
    {
        $this->customer = $customer;
    }


    public function index()
    {
        //

        $customers = $this->customer->index();

        return $this->sendResponse(CustomerResource::collection($customers), 'allCustomers retrieved successfully.');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomer $request)
    {
        //

        $customer = $this->customer->store($request);

        return $this->sendResponse(new CustomerResource($customer), 'Customer created successfully.');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $customer = $this->customer->show($id);

        return $this->sendResponse(new CustomerResource($customer), 'Customer retrieved successfully.');
    


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $customer =  $this->customer->update($id, $request->except('_method'));

        return $this->sendResponse(new CustomerResource($customer), 'Customer updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $this->customer->destroy($id);

        return $this->sendResponse([], 'Customer deleted successfully.');

    }
}
