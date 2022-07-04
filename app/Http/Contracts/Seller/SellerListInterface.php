<?php

namespace App\Http\Contracts\Seller;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\Paginator;

interface SellerListInterface
{

    function getAllWithSumCommission(): Paginator;

    function getSellerListAll(): Collection;

}
