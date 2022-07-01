<?php

namespace App\Repositories\Seller;

use App\Application\Seller\Contracts\SellerListRepository;
use App\Application\Seller\Contracts\SellerPersistRepository;
use App\Models\Seller;

class SellerRepository implements
    SellerListRepository,
    SellerPersistRepository
{

    public function getAll()
    {
        return Seller::all();
    }

    public function save(Seller $seller): Seller
    {
        $seller->save();
        return $seller;
    }



}
