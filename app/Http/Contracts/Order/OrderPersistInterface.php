<?php

namespace App\Http\Contracts\Order;

use App\Http\Requests\OrderCreateRequest;
use App\Models\Order;

interface OrderPersistInterface
{

    function save(OrderCreateRequest $request): Order;

}
