<?php

namespace App\Application\Order\Contracts;

use Illuminate\Contracts\Pagination\Paginator;

interface OrderListRepository
{

    function getOrdersFromSeller(int $sellerId): Paginator;

}
