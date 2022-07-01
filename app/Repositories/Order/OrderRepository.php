<?php

namespace App\Repositories\Order;

use App\Application\Order\Contracts\OrderListRepository;
use App\Application\Order\Contracts\OrderPersistRepository;
use App\Models\Order;

class OrderRepository implements
    OrderListRepository,
    OrderPersistRepository
{

    public function getOrdersFromSeller(int $sellerId)
    {
        return Order::where('seller_id', $sellerId)->get();
    }

    public function save(Order $order): Order
    {
        $order->save($order);
        return $order;
    }
}
