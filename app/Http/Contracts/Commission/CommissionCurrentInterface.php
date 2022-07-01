<?php

namespace App\Http\Contracts\Commission;

interface CommissionCurrentInterface
{
    function getPercentage() : float;
}
