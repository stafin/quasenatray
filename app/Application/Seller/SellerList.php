<?php

namespace App\Application\Seller;

use App\Application\Seller\Contracts\SellerListRepository;
use App\Http\Contracts\Seller\SellerListInterface;

class SellerList implements SellerListInterface
{

    public function __construct(
        private SellerListRepository $repository,
    )
    {
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

}
