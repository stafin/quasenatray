<?php

namespace App\Application\Commission;

use App\Http\Contracts\Commission\CommissionListInterface;
use App\Application\Commission\Contracts\CommissionListRepository;
use App\Models\Commission;

class CommissionList implements CommissionListInterface
{

    public function __construct(
        private CommissionListRepository $repository,
    )
    {
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }
}
