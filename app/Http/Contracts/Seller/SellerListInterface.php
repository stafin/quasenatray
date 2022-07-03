<?php

namespace App\Http\Contracts\Seller;

use Illuminate\Pagination\Paginator;

interface SellerListInterface
{

    function getAllWithSumCommission(): Paginator;

}
