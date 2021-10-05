<?php

namespace App\Repositories\Eloquent;

use App\Models\Product;

use App\Repositories\IRepositories\IProductRepository;

class ProductRepository implements IProductRepository
{
    protected $product = null;

    public function index(){

        return Product::all();

    }

    public function store( $collection = [] ){

       
        $product = new Product;

        $product->ProductName = $collection['ProductName'];

        $product->supplier_id = $collection['supplier_id'];

        $product->UnitPrice = $collection['UnitPrice'];

        $product->save();

        return $product ;

    }

    public function show($id){

        return Product::findOrFail($id);

    }

    public function update($id , $collection = [] ){

        // find resource

        $product = Product::findOrFail($id);

        // Update only passed descriptor values

       // 'supplier_id' => 'required|exists:suppliers,id',

         


        $product->update($collection);

        $product->save();

        return $product ;

    }

    public function destroy($id){

        Product::destroy($id);

    }


}