<?php

namespace App\Application\Seller\Contracts;

use Illuminate\Pagination\Paginator;

interface SellerListRepository
{

    function getAllWithSumCommission(): Paginator;

}
