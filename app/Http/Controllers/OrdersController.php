<?php

namespace App\Http\Controllers;

use App\Http\Contracts\Order\OrderListInterface;
use App\Http\Contracts\Order\OrderPersistInterface;
use App\Http\Requests\OrderCreateRequest;
use App\Http\Requests\OrderListRequest;
use Illuminate\Http\Request;

class OrdersController extends Controller
{

    public function __construct(
        private OrderListInterface $list,
        private OrderPersistInterface $persist,
    )
    {
    }

    public function index(OrderListRequest $request): \Illuminate\Http\JsonResponse
    {
        return response()->json($this->list->getOrdersFromSeller($request->id));
    }


    public function store(OrderCreateRequest $request)
    {
        return response()->json($this->persist->save($request));
    }

}
