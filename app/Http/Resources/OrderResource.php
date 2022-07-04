<?php

namespace App\Http\Resources;

use Carbon\Carbon;
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
            'comissao_per'  => number_format($this->commission->percentage, 2, ',', '.'),
            'comissao_valor'=> number_format($this->commission_value, 2, ',', '.'),
            'venda_valor'   => number_format($this->order_value, 2, ',', '.'),
            'criado_em'     => Carbon::create($this->created_at)->format("d/m/Y H:i")
        ];

    }
}
