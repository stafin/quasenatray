<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return [
            'id'            => $this->id,
            'vendedor_id'   => $this->seller->id,
            'nome'          => $this->seller->name,
            'email'         => $this->seller->email,
            'comissao_per'  => $this->commission->percentage,
            'comissao_valor'=> $this->commission_value,
            'venda_valor'   => $this->order_value,
            'criado_em'     => $this->created_at
        ];

    }
}
