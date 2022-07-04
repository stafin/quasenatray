<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\ResourceCollection;

class OrdersFromSellersCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return
            $this->collection->map(function($data) {
                return [
                    'id'            => $data->id,
                    'vendedor_id'   => $data->seller->id,
                    'nome'          => $data->seller->name,
                    'email'         => $data->seller->email,
                    'comissao_per'  => number_format($data->commission->percentage, 2, ',', '.'),
                    'comissao_valor'=> number_format($data->commission_value, 2, ',', '.'),
                    'venda_valor'   => number_format($data->order_value, 2, ',', '.'),
                    'criado_em'     => Carbon::create($data->created_at)->format("d/m/Y H:i")
                ];
            });

    }
}
