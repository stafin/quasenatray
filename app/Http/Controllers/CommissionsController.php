<?php

namespace App\Http\Controllers;

use App\Http\Contracts\Commission\CommissionCurrentInterface;
use App\Http\Contracts\Commission\CommissionListInterface;
use App\Http\Contracts\Commission\CommissionPersistInterface;
use App\Http\Requests\CommissionCreateRequest;
use App\Http\Resources\CommissionsCollection;
use App\Http\Resources\CommissionOnlyPercentageResource;
use App\Http\Resources\CommissionResource;

class CommissionsController extends Controller
{

    public function __construct(
        private CommissionListInterface $list,
        private CommissionCurrentInterface $current,
        private CommissionPersistInterface $persist,
    ){

    }


    public function index(): CommissionsCollection
    {

        return new CommissionsCollection($this->list->getAll());

    }


    public function currentCommission(): CommissionOnlyPercentageResource
    {

        return new CommissionOnlyPercentageResource($this->current->getCommissionCurrent());

    }


    public function store(CommissionCreateRequest $request): CommissionResource
    {

        return new CommissionResource($this->persist->save($request));

    }

}
