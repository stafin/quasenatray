<?php

namespace App\Repositories\Order;

use App\Application\Order\Contracts\OrderListRepository;
use App\Application\Order\Contracts\OrderPersistRepository;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Order;

class OrderRepository implements
    OrderListRepository,
    OrderPersistRepository
{

    public function getOrdersFromSeller(int $sellerId): Collection
    {

        return Order::where('seller_id', $sellerId)
            ->orderBy('id', 'desc')
            ->get();

    }


    public function save(Order $order): Order
    {

        $order->save();
        return $order;

    }
    
}
