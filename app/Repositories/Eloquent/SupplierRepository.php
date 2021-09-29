<?php

namespace App\Repositories\Eloquent;

use App\Models\Supplier;

use App\Repositories\IRepositories\ISupplierRepository;

class SupplierRepository implements ISupplierRepository
{
    protected $supplier = null;

    public function index(){

        return Supplier::all();

    }

    public function store( $collection = [] ){

       
        $supplier = new Supplier;
       
        $supplier->CompanyName	 = $collection['CompanyName'];

        $supplier->ContactName	 = $collection['ContactName'];

        $supplier->City	 = $collection['City'];

        $supplier->Country	 = $collection['Country'];

        $supplier->Phone	 = $collection['Phone'];

        $supplier->Fax	 = $collection['Fax'];

        $supplier->save();

        return $supplier ;

    }

    public function show($id){

        return Supplier::findOrFail($id);

    }

    public function update($id , $collection = [] ){

        $supplier = Supplier::findOrFail($id);

        $supplier->CompanyName	 = $collection['CompanyName'];

        $supplier->ContactName	 = $collection['ContactName'];

        $supplier->City	 = $collection['City'];

        $supplier->Country	 = $collection['Country'];

        $supplier->Phone	 = $collection['Phone'];

        $supplier->Fax	 = $collection['Fax'];

        $supplier->save();

        return $supplier ;

     //   Supplier::where('id', $id)->update($collection);

    }

    public function destroy($id){

         Supplier::destroy($id);
    }


}