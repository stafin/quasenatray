<?php

namespace App\Application\Commission\Contracts;

use Illuminate\Pagination\Paginator;

interface CommissionListRepository
{

    function getAll(): Paginator;

}
