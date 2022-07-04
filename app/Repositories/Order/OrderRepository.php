<?php

namespace App\Repositories\Order;

use App\Application\Order\Contracts\OrderListRepository;
use App\Application\Order\Contracts\OrderPersistRepository;
use Illuminate\Contracts\Pagination\Paginator;
use App\Models\Order;

class OrderRepository implements
    OrderListRepository,
    OrderPersistRepository
{

    public function getOrdersFromSeller(int $sellerId): Paginator
    {

        return Order::with('seller', 'commission')
            ->where('seller_id', $sellerId)
            ->orderBy('id', 'desc')
            ->simplePaginate(5);

    }


    public function getOrdersAll(): Paginator
    {

        return Order::with('seller', 'commission')
            ->orderBy('id', 'desc')
            ->simplePaginate(5);

    }


    public function save(Order $order): Order
    {

        $order->save();
        return $order;

    }

}
