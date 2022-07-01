<?php

namespace App\Http\Controllers;

use App\Http\Contracts\Commission\CommissionCurrentInterface;
use App\Http\Contracts\Commission\CommissionListInterface;
use App\Http\Contracts\Commission\CommissionPersistInterface;
use App\Http\Requests\CommissionCreateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CommissionsController extends Controller
{

    public function __construct(
        private CommissionListInterface $list,
        private CommissionCurrentInterface $current,
        private CommissionPersistInterface $persist,
    ){

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


    public function currentCommission(): JsonResponse
    {

        try {

            return response()->json(
                $this->current->getPercentage(),
                Response::HTTP_OK
            );

        } catch (\Exception $e) {

            return response()->json([
                'error' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);


        }

    }


    public function store(CommissionCreateRequest $request): JsonResponse
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
