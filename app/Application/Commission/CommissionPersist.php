<?php

namespace App\Application\Commission;

use App\Application\Commission\Contracts\CommissionPersistRepository;
use App\Http\Contracts\Commission\CommissionPersistInterface;
use App\Http\Requests\CommissionCreateRequest;
use App\Models\Commission;

class CommissionPersist implements CommissionPersistInterface
{

    public function __construct(
        private CommissionPersistRepository $repository,
    )
    {

    }


    public function save(CommissionCreateRequest $request): Commission
    {

        $commission = new Commission();
        $commission->percentage = $request->input('porcentagem');

        return $this->repository->save($commission);

    }

}
