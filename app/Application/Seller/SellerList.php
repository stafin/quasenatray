<?php

namespace App\Application\Seller;

use App\Application\Seller\Contracts\SellerListRepository;
use App\Http\Contracts\Seller\SellerListInterface;
use Illuminate\Pagination\Paginator;

class SellerList implements SellerListInterface
{

    public function __construct(
        private SellerListRepository $repository,
    )
    {

    }


    public function getAllWithSumCommission(): Paginator
    {

        return $this->repository->getAllWithSumCommission();

    }

}
