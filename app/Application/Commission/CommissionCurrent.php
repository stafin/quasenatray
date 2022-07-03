<?php

namespace App\Application\Commission;

use App\Application\Commission\Contracts\CommissionCurrentRepository;
use App\Http\Contracts\Commission\CommissionCurrentInterface;
use App\Models\Commission;

class CommissionCurrent implements CommissionCurrentInterface
{

    public function __construct(
        private CommissionCurrentRepository $repository,
    )
    {

    }


    public function getCommissionCurrent(): Commission
    {

        return $this->repository->getCommissionCurrent();

    }

}
