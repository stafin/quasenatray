<?php

namespace App\Http\Controllers;

use App\Http\Contracts\Seller\SellerListInterface;
use App\Http\Contracts\Seller\SellerPersistInterface;
use App\Http\Requests\SellerCreateRequest;
use Illuminate\Http\Request;

class SellersController extends Controller
{


    public function __construct(
        private SellerListInterface $list,
        private SellerPersistInterface $persist,
    )
    {
    }


    public function index(): \Illuminate\Http\JsonResponse
    {

        return response()->json($this->list->getAll());

    }


    public function store(SellerCreateRequest $request): \Illuminate\Http\JsonResponse
    {
        return response()->json($this->persist->save($request));
    }


}
