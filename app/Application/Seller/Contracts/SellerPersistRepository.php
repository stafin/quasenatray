<?php

namespace App\Application\Seller\Contracts;

use App\Models\Seller;

interface SellerPersistRepository
{

    function save(Seller $seller) : Seller;

}
