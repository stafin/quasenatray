<?php

namespace App\Http\Contracts\Commission;

use Illuminate\Pagination\Paginator;

interface CommissionListInterface
{

    function getAll(): Paginator;

}
