<?php

namespace App\Http\Contracts\Seller;

use Illuminate\Database\Eloquent\Collection;

interface SellersWithOrdersDayInterface
{

    function getSellersWithOrdersDay(): Collection;

}
