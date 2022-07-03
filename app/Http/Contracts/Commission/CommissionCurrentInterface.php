<?php

namespace App\Http\Contracts\Commission;

use App\Models\Commission;

interface CommissionCurrentInterface
{

    function getCommissionCurrent(): Commission;

}
