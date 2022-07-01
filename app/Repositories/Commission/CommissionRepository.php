<?php

namespace App\Repositories\Commission;

use App\Application\Commission\Contracts\CommissionCurrentRepository;
use App\Application\Commission\Contracts\CommissionListRepository;
use App\Application\Commission\Contracts\CommissionPersistRepository;
use App\Models\Commission;

class CommissionRepository implements
    CommissionListRepository,
    CommissionCurrentRepository,
    CommissionPersistRepository
{

    public function getAll()
    {
        return Commission::all();
    }

    public function getPercentage()
    {
        return 8.5;
    }

    public function save(Commission $commission): Commission
    {
        $commission->save();
        return $commission;
    }

}
