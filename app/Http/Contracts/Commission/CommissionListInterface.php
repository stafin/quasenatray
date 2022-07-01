<?php

namespace App\Http\Contracts\Commission;

use Illuminate\Database\Eloquent\Collection;

interface CommissionListInterface
{

    function getAll(): Collection;

}
