<?php

namespace App\Repositories\Seller;

use App\Application\Seller\Contracts\SellerListRepository;
use App\Application\Seller\Contracts\SellerPersistRepository;
use App\Application\Seller\Contracts\SellersWithOrdersDayRepository;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Seller;

class SellerRepository implements
    SellerListRepository,
    SellerPersistRepository,
    SellersWithOrdersDayRepository
{

    public function getAllWithSumCommission(): Paginator
    {

        return Seller::selectRaw('*,
                (select coalesce(sum(commission_value), 0)
                    from orders
                    where seller_id = sellers.id) as commission')
            ->orderBy('id', 'desc')
            ->simplePaginate(5);

    }


    public function save(Seller $seller): Seller
    {

        $seller->save();
        return $seller;

    }


    public function getSellersWithOrdersDay(): Collection
    {

        return Seller::with('ordersDay')
            ->orderBy('id', 'desc')
            ->get();

    }

    public function getSellerListAll(): Collection
    {

        return Seller::orderBy('name', 'asc')->get();

    }

}
