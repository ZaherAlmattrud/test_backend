<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Repositories\IRepositories\IProductRepository;

use App\Http\Resources\ProductResource;

use App\Http\Requests\StoreProduct;

use Illuminate\Support\Facades\Validator;

 
use Illuminate\Http\Exceptions\HttpResponseException;

use App\Http\Controllers\BaseController ;

class ProductController extends BaseController 

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public $product;


    public function __construct(IProductRepository $product)
    {
        $this->product = $product;
    }

  


    public function index()
    {
        //

        $products = $this->product->index();

        return $this->sendResponse(ProductResource::collection($products), 'allProducts retrieved successfully.');


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
    public function store(StoreProduct $request)
    {
        //

        $product = $this->product->store($request);

        return $this->sendResponse(new ProductResource($product), 'Product created successfully.');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $product = $this->product->show($id);

        return $this->sendResponse(new ProductResource($product), 'Product retrieved successfully.');
    

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
 
    $validator = Validator::make($request->all(),[

        'supplier_id' => 'required|exists:suppliers,id',
        
    ]);

    if( $validator->fails() ){

        $errors = $validator->errors();

        $response = response()->json([

            'message' => 'Invalid data send',

            'details' => $errors->messages(),

        ], 422);
    
        throw new HttpResponseException($response);

    } else {

        

     $product =  $this->product->update($id, $request->except('_method'));

     return $this->sendResponse(new ProductResource($product), 'Product updated successfully.');
        
    }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->product->destroy($id);

        return $this->sendResponse([], 'Product deleted successfully.');

    }
}
