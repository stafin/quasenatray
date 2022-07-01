<?php

namespace App\Http\Contracts\Seller;

use Illuminate\Database\Eloquent\Collection;

interface SellerListInterface
{

    function getAll(): Collection;

}
