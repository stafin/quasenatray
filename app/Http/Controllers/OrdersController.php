<?php

namespace App\Http\Controllers;

use App\Http\Contracts\Order\OrderListInterface;
use App\Http\Contracts\Order\OrderPersistInterface;
use App\Http\Requests\OrderCreateRequest;
use App\Http\Requests\OrderListRequest;
use App\Http\Resources\OrderResource;
use App\Http\Resources\OrdersCollection;
use App\Http\Resources\OrdersFromSellersCollection;

class OrdersController extends Controller
{

    public function __construct(
        private OrderListInterface $list,
        private OrderPersistInterface $persist,
    )
    {

    }

    public function listOrdersFromSeller(OrderListRequest $request): OrdersFromSellersCollection
    {

        return new OrdersFromSellersCollection($this->list->getOrdersFromSeller($request->id));

    }


    public function listOrdersAll(): OrdersCollection
    {

        return new OrdersCollection($this->list->getOrdersAll());

    }


    public function store(OrderCreateRequest $request): OrderResource
    {

        return new OrderResource($this->persist->save($request));

    }

}
