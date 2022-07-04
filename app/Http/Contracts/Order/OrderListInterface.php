<?php

namespace App\Http\Contracts\Order;

use Illuminate\Contracts\Pagination\Paginator;

interface OrderListInterface
{

    function getOrdersFromSeller(int $sellerId): Paginator;

    function getOrdersAll(): Paginator;

}
