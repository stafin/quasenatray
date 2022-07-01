<?php

namespace App\Http\Contracts\Commission;

use App\Http\Requests\CommissionCreateRequest;
use App\Models\Commission;

interface CommissionPersistInterface
{

    function save(CommissionCreateRequest $request) : Commission;

}
