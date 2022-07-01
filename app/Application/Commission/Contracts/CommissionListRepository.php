<?php

namespace App\Application\Commission\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface CommissionListRepository
{

    function getAll(): Collection;

}
