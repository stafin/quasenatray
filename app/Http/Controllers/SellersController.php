<?php

namespace App\Http\Controllers;

use App\Http\Contracts\Seller\SellerListInterface;
use App\Http\Contracts\Seller\SellerPersistInterface;
use App\Http\Requests\SellerCreateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SellersController extends Controller
{


    public function __construct(
        private SellerListInterface $list,
        private SellerPersistInterface $persist,
    )
    {

    }


    public function index(): JsonResponse
    {

        try {

            return response()->json(
                $this->list->getAll(),
                Response::HTTP_OK
            );

        } catch (\Exception $e) {

            return response()->json([
                'error' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }

    }


    public function store(SellerCreateRequest $request): JsonResponse
    {

        try {

            return response()->json(
                $this->persist->save($request),
                Response::HTTP_CREATED
            );

        } catch (\Exception $e) {

            return response()->json([
                'error' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);


        }

    }

}
