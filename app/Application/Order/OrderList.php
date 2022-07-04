<?php

namespace App\Application\Order;

use App\Application\Order\Contracts\OrderListRepository;
use App\Http\Contracts\Order\OrderListInterface;
use Illuminate\Contracts\Pagination\Paginator;

class OrderList implements OrderListInterface
{

    public function __construct(
        private OrderListRepository $repository,
    )
    {

    }


    public function getOrdersFromSeller(int $sellerId): Paginator
    {

        return $this->repository->getOrdersFromSeller($sellerId);

    }


    public function getOrdersAll(): Paginator
    {

        return $this->repository->getOrdersAll();

    }

}
