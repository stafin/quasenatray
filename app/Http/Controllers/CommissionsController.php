<?php

namespace App\Http\Controllers;

use App\Http\Contracts\Commission\CommissionCurrentInterface;
use App\Http\Contracts\Commission\CommissionListInterface;
use App\Http\Contracts\Commission\CommissionPersistInterface;
use App\Http\Requests\CommissionCreateRequest;

class CommissionsController extends Controller
{

    public function __construct(
        private CommissionListInterface $list,
        private CommissionCurrentInterface $current,
        private CommissionPersistInterface $persist,
    ){
    }

    public function index()
    {
        return response()->json($this->list->getAll());
    }

    public function currentCommission()
    {
        return response()->json($this->current->getPercentage());
    }

    public function store(CommissionCreateRequest $request)
    {
        try {

            return response()->json($this->persist->save($request));

        } catch (\Exception $e) {

            return response()->json([
                'tipo' => 'exception',
                'mensagem' => $e->getMessage()
            ]);

        }

    }

}
