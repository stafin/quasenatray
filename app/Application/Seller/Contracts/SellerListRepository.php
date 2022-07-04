<?php

namespace App\Application\Seller\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\Paginator;

interface SellerListRepository
{

    function getAllWithSumCommission(): Paginator;

    function getSellerListAll(): Collection;

}
