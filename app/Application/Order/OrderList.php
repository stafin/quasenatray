<?php

namespace App\Application\Order;

use App\Application\Order\Contracts\OrderListRepository;
use App\Http\Contracts\Order\OrderListInterface;

class OrderList implements OrderListInterface
{

    public function __construct(
        private OrderListRepository $repository,
    )
    {

    }

    public function getOrdersFromSeller(int $sellerId)
    {
        return $this->repository->getOrdersFromSeller($sellerId);
    }

}
