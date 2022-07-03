<?php

namespace App\Application\Seller\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface SellersWithOrdersDayRepository
{
    function getSellersWithOrdersDay(): Collection;
}
