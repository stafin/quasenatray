<?php

namespace App\Application\Seller;

use App\Application\Seller\Contracts\SellerPersistRepository;
use App\Http\Contracts\Seller\SellerPersistInterface;
use App\Http\Requests\SellerCreateRequest;
use App\Models\Seller;

class SellerPersist implements SellerPersistInterface
{
    public function __construct(
        private SellerPersistRepository $repository,
    )
    {
    }

    public function save(SellerCreateRequest $request)
    {
        $seller = new Seller();
        $seller->fill($request->all());
        return $this->repository->save($seller);
    }
}
