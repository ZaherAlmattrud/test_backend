<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

use App\Http\Controllers\BaseController ;

use App\Repositories\IRepositories\IOrderRepository;

use App\Http\Resources\OrderResource;

use App\Http\Requests\StoreOrder;


class OrderController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $order;


    public function __construct(IOrderRepository $order)
    {
        $this->order = $order;
    }



    public function index()
    {
        //

        $orders = $this->order->index();

        return $this->sendResponse(OrderResource::collection($orders), 'allOrders retrieved successfully.');

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
    public function store(StoreOrder $request)
    {
        //
        $order = $this->order->store($request);

        return $this->sendResponse(new OrderResource($order), 'Order created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $order = $this->order->show($id);

        return $this->sendResponse(new OrderResource($order), 'Order retrieved successfully.');
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $order =  $this->order->update($id, $request->except('_method'));

        return $this->sendResponse(new OrderResource($order), 'Order updated successfully.');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $this->order->destroy($id);

        return $this->sendResponse([], 'Order deleted successfully.');

        
    }
}
