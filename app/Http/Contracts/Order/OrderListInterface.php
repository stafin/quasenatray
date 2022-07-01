<?php

namespace App\Http\Contracts\Order;

use Ramsey\Uuid\Type\Integer;

interface OrderListInterface
{
    function getOrdersFromSeller(int $sellerId);
}
