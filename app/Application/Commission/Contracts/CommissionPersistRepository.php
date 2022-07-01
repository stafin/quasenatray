<?php

namespace App\Application\Commission\Contracts;

use App\Models\Commission;

interface CommissionPersistRepository
{

    function save(Commission $commission): Commission;

}
