<?php

namespace App\Repositories\Commission;

use App\Application\Commission\Contracts\CommissionCurrentRepository;
use App\Application\Commission\Contracts\CommissionListRepository;
use App\Application\Commission\Contracts\CommissionPersistRepository;
use Illuminate\Pagination\Paginator;
use App\Models\Commission;

class CommissionRepository implements
    CommissionListRepository,
    CommissionCurrentRepository,
    CommissionPersistRepository
{


    public function getAll(): Paginator
    {

        return Commission::orderBy('id', 'desc')->simplePaginate(5);

    }


    public function getCommissionCurrent(): Commission
    {

        return Commission::orderBy('id', 'desc')->first();

    }


    public function save(Commission $commission): Commission
    {

        $commission->save();
        return $commission;

    }

}
