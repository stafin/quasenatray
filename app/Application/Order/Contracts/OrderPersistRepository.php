<?php

namespace App\Application\Order\Contracts;

use App\Models\Order;

interface OrderPersistRepository
{
    function save(Order $order);
}
