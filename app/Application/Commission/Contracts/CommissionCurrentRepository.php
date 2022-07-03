<?php

namespace App\Application\Commission\Contracts;

use App\Models\Commission;

interface CommissionCurrentRepository
{

    function getCommissionCurrent(): Commission;

}
