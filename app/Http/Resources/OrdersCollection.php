<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class OrdersCollection extends ResourceCollection
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
                    'comissao_per'  => $data->commission->percentage,
                    'comissao_valor'=> $data->commission_value,
                    'venda_valor'   => $data->order_value,
                    'criado_em'     => $data->created_at
                ];
            });

    }
}
