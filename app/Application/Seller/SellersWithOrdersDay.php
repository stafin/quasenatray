<?php

namespace App\Application\Seller;

use App\Application\Seller\Contracts\SellersWithOrdersDayRepository;
use App\Http\Contracts\Seller\SellersWithOrdersDayInterface;
use Illuminate\Database\Eloquent\Collection;

class SellersWithOrdersDay implements SellersWithOrdersDayInterface
{

    public function __construct(
        private SellersWithOrdersDayRepository $repository,
    )
    {

    }

    public function getSellersWithOrdersDay(): Collection
    {
        return $this->repository->getSellersWithOrdersDay();
    }

}
