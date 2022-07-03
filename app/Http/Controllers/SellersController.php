<?php

namespace App\Http\Controllers;

use App\Http\Contracts\Seller\SellerListInterface;
use App\Http\Contracts\Seller\SellerPersistInterface;
use App\Http\Requests\SellerCreateRequest;
use App\Http\Resources\SellerResource;
use App\Http\Resources\SellersWithSumCommissionCollection;
use Illuminate\Http\Response;


class SellersController extends Controller
{


    public function __construct(
        private SellerListInterface $list,
        private SellerPersistInterface $persist,
    )
    {

    }


    public function index(): SellersWithSumCommissionCollection
    {

        return new SellersWithSumCommissionCollection($this->list->getAllWithSumCommission());

    }


    public function store(SellerCreateRequest $request): SellerResource
    {

        return new SellerResource($this->persist->save($request));

    }

}
