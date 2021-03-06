<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class SellersWithSumCommissionCollection extends ResourceCollection
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
                    'id'         => $data->id,
                    'nome'       => $data->name,
                    'email'      => $data->email,
                    'comissao'   => number_format($data->commission, 2, ',', '.')
                ];
            });

    }
}
