<?php

namespace App\Http\Contracts\Seller;

use App\Http\Requests\SellerCreateRequest;
use App\Models\Seller;

interface SellerPersistInterface
{

    function save(SellerCreateRequest $request): Seller;

}
