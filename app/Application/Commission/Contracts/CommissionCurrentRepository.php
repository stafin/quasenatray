<?php

namespace App\Application\Commission\Contracts;

interface CommissionCurrentRepository
{

    function getPercentage(): float;

}
