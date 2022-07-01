<?php

namespace App\Application\Order;

use App\Application\Order\Contracts\OrderListRepository;
use App\Http\Contracts\Order\OrderListInterface;
use Illuminate\Database\Eloquent\Collection;

class OrderList implements OrderListInterface
{

    public function __construct(
        private OrderListRepository $repository,
    )
    {

    }


    public function getOrdersFromSeller(int $sellerId): Collection
    {

        return $this->repository->getOrdersFromSeller($sellerId);

    }

}
