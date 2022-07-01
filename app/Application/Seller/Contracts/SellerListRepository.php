<?php

namespace App\Application\Seller\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface SellerListRepository
{

    function getAll(): Collection;

}
