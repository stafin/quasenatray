<?php

namespace App\Http\Contracts\Seller;

use App\Http\Requests\SellerCreateRequest;

interface SellerPersistInterface
{
    function save(SellerCreateRequest $request);
}
