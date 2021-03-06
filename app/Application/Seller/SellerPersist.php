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


    public function save(SellerCreateRequest $request): Seller
    {

        $seller = new Seller();
        $seller->name   = strip_tags($request->input('nome'));
        $seller->email  = $request->input('email');
        return $this->repository->save($seller);

    }

}
