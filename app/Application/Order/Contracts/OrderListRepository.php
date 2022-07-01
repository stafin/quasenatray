<?php

namespace App\Application\Order\Contracts;

interface OrderListRepository
{
    function getOrdersFromSeller(int $sellerId);
}
