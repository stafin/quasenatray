<?php

namespace App\Application\Commission;

use App\Application\Commission\Contracts\CommissionCurrentRepository;
use App\Http\Contracts\Commission\CommissionCurrentInterface;

class CommissionCurrent implements CommissionCurrentInterface
{

    public function __construct(
        private CommissionCurrentRepository $repository,
    )
    {

    }


    public function getPercentage(): float
    {

        return $this->repository->getPercentage();

    }

}
