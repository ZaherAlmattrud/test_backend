<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController ;
use App\Repositories\IRepositories\ISupplierRepository;
use App\Http\Resources\SupplierResource;
use App\Http\Requests\StoreSupplier;

class SupplierController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $supplier;


    public function __construct(ISupplierRepository $supplier)
    {
        $this->supplier = $supplier;
    }

    public function index()
    {
        //
         
        $suppliers = $this->supplier->index();

        return $this->sendResponse(SupplierResource::collection($suppliers), 'allSuppliers retrieved successfully.');
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
    public function store(StoreSupplier $request)
    {

       $supplier = $this->supplier->store($request);

       return $this->sendResponse(new SupplierResource($supplier), 'Supplier created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       $supplier = $this->supplier->show($id);

       return $this->sendResponse(new SupplierResource($supplier), 'Supplier retrieved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $supplier =  $this->supplier->update($id, $request->except('_method'));

        return $this->sendResponse(new SupplierResource($supplier), 'Supplier updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

         $this->supplier->destroy($id);

         return $this->sendResponse([], 'Suppler deleted successfully.');

        
    }

    
}
