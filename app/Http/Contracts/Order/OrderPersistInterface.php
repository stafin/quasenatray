<?php

namespace App\Http\Contracts\Order;

use App\Http\Requests\OrderCreateRequest;

interface OrderPersistInterface
{
    function save(OrderCreateRequest $request);
}
