<?php

namespace App\Application\Commission;

use App\Http\Contracts\Commission\CommissionListInterface;
use App\Application\Commission\Contracts\CommissionListRepository;
use Illuminate\Database\Eloquent\Collection;

class CommissionList implements CommissionListInterface
{

    public function __construct(
        private CommissionListRepository $repository,
    )
    {

    }


    public function getAll(): Collection
    {

        return $this->repository->getAll();

    }
}
