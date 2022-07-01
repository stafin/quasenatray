<?php

namespace App\Http\Contracts\Order;

use Illuminate\Database\Eloquent\Collection;

interface OrderListInterface
{

    function getOrdersFromSeller(int $sellerId): Collection;

}
