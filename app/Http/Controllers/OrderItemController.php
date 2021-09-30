<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

use App\Http\Controllers\BaseController ;

use App\Repositories\IRepositories\IOrderItemRepository;

use App\Http\Resources\OrderItemResource;

use App\Http\Requests\StoreOrderItem;

class OrderItemController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $order_item;


    public function __construct(IOrderItemRepository $order_item)
    {
        $this->order_item = $order_item;
    }

    public function index()
    {
        //

        $order_items = $this->order_item->index();

        return $this->sendResponse(OrderItemResource::collection($order_items), 'allOrderItem retrieved successfully.');

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
    public function store(StoreOrderItem $request)
    {
        //

        $order_item = $this->order_item->store($request);

        return $this->sendResponse(new OrderItemResource($order_item), 'OrderItem created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $order_item = $this->order_item->show($id);

        return $this->sendResponse(new OrderItemResource($order_item), 'OrderItem retrieved successfully.');
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderItem $orderItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //

        $order_item =  $this->order_item->update($id, $request->except('_method'));

        return $this->sendResponse(new OrderItemResource($order_item), 'OrderItem updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $this->order_item->destroy($id);

        return $this->sendResponse([], 'OrderItem deleted successfully.');

    }
}
