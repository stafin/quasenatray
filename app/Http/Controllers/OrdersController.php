<?php

namespace App\Http\Controllers;

use App\Http\Contracts\Order\OrderListInterface;
use App\Http\Contracts\Order\OrderPersistInterface;
use App\Http\Requests\OrderCreateRequest;
use App\Http\Requests\OrderListRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class OrdersController extends Controller
{

    public function __construct(
        private OrderListInterface $list,
        private OrderPersistInterface $persist,
    )
    {

    }

    public function index(OrderListRequest $request): JsonResponse
    {

        try {

            return response()->json(
                $this->list->getOrdersFromSeller($request->id),
                Response::HTTP_OK
            );

        } catch (\Exception $e) {

            return response()->json([
                'error' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }

    }


    public function store(OrderCreateRequest $request)
    {

        try {

            return response()->json(
                $this->persist->save($request),
                Response::HTTP_CREATED
            );

        } catch (\Exception $e) {

            return response()->json([
                'error' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }

    }

}
