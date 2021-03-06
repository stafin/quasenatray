<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CommissionsCollection extends ResourceCollection
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
                    'porcentagem'   => number_format($data->percentage, 2, ',', '.'),
                    'criado_em'     => Carbon::create($data->created_at)->format("d/m/Y H:i")
                ];
            });

    }
}
