<?php

namespace App\Application\Commission;

use App\Http\Contracts\Commission\CommissionListInterface;
use App\Application\Commission\Contracts\CommissionListRepository;
use Illuminate\Pagination\Paginator;

class CommissionList implements CommissionListInterface
{

    public function __construct(
        private CommissionListRepository $repository,
    )
    {

    }


    public function getAll(): Paginator
    {

        return $this->repository->getAll();

    }

}
