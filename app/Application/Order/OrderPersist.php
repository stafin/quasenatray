<?php

namespace App\Application\Order;

use App\Application\Order\Contracts\OrderPersistRepository;
use App\Http\Contracts\Commission\CommissionCurrentInterface;
use App\Http\Contracts\Order\OrderPersistInterface;
use App\Http\Requests\OrderCreateRequest;
use App\Models\Order;

class OrderPersist implements OrderPersistInterface
{

    private float $currentCommission;
    private int   $currentCommissionId;

    public function __construct(
        private CommissionCurrentInterface $commission,
        private OrderPersistRepository $repository,

    )
    {

        $this->currentCommission    = $this->commission->getCommissionCurrent()->getAttribute('percentage');
        $this->currentCommissionId  = $this->commission->getCommissionCurrent()->getAttribute('id');

    }


    public function save(OrderCreateRequest $request): Order
    {

        $order = new Order();
        $order->seller_id = $request->input('vendedor_id');
        $order->order_value = $request->input('venda_valor');
        $order->commission_id = $this->currentCommissionId;
        $order->commission_value = self::calculateCommissionValue($request->input('venda_valor'));

        return $this->repository->save($order);

    }


    private function calculateCommissionValue($orderValue): float
    {

        if($orderValue > 0 && $this->currentCommission > 0)
            return round((($orderValue * $this->currentCommission) / 100),
                2);

        return 0;

    }

}
