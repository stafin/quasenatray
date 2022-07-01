<?php

namespace App\Application\Order\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface OrderListRepository
{

    function getOrdersFromSeller(int $sellerId): Collection;

}
