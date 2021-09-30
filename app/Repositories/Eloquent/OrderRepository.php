<?php

namespace App\Repositories\Eloquent;

use App\Models\Order;

use App\Repositories\IRepositories\IOrderRepository;
use Illuminate\Support\Facades\DB;

class OrderRepository implements IOrderRepository
{
    protected $order = null;

    public function index(){

        return Order::all();

    }

    public function store( $collection = [] ){

       
        $order = new Order;
       
        $order->OrderDate	 = $collection['OrderDate'];

        $order->OrderNumber	 = $collection['OrderNumber'];

        $order->CustomerId	 = $collection['customer_id'];

        $order->TotalAmount	 = $collection['TotalAmount'];

        $order->save();

        return $order ;

    }

    public function show($id){

        
        return Order::findOrFail($id);

    }

    public function update($id , $collection = [] ){

        // find resource

        $order = Order::findOrFail($id);

        // Update only passed descriptor values

        $order->update($collection);

        $order->save();

        return $order ;

    }

    public function destroy($id){

         Order::destroy($id);
    }


}