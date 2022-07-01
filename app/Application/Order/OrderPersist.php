<?php

namespace App\Application\Order;

use App\Application\Order\Contracts\OrderPersistRepository;
use App\Http\Contracts\Order\OrderPersistInterface;
use App\Http\Requests\OrderCreateRequest;
use App\Models\Order;

class OrderPersist implements OrderPersistInterface
{

    public function __construct(
        private OrderPersistRepository $repository,
    )
    {

    }

    public function save(OrderCreateRequest $request)
    {
        $order = new Order;
        $order->seller_id = $request->input('seller_id');
        $order->order_value = $request->input('order_value');
        $order->commission_id = 2;
        $order->commission_value = 500;
        $this->repository->save($order);
    }

}
