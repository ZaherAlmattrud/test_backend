<?php

namespace App\Repositories\Eloquent;

use App\Models\OrderItem;

use App\Models\Product;

use App\Repositories\IRepositories\IOrderItemRepository;

class OrderItemRepository implements IOrderItemRepository
{
    protected $order_item = null;

    public function index(){

        return OrderItem::all();

    }

    public function store( $collection = [] ){

       
        $order_item = new OrderItem;
       
        $order_item->OrderId	 = $collection['order_id'];

        $order_item->ProductId	 = $collection['product_d'];

       

  
        $product = Product::find($collection['product_d']);

      

        $order_item->UnitPrice	 = $product ->UnitPrice;; // $collection['UnitPrice'];
        //
        $order_item->Quantity	 = $collection['Quantity'];
         
        $order_item->save();

        return $order_item ;

    }

    public function show($id){

        return OrderItem::findOrFail($id);

    }

    public function update($id , $collection = [] ){

        // find resource

        $order_item = OrderItem::findOrFail($id);

        // Update only passed descriptor values

        $order_item->update($collection);

        $order_item->save();

        return $order_item ;

    }

    public function destroy($id){

         OrderItem::destroy($id);
    }


}