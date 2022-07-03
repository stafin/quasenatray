<?php

namespace App\Http\Controllers;

use App\Http\Contracts\Seller\SellersWithOrdersDayInterface;
use App\Jobs\SendMailSellersOrdersReport;

class MailController extends Controller
{

    public function __construct(
        private SellersWithOrdersDayInterface $sellersWithOrdersDay,
    )
    {

    }

    public function sendMailSellersOrdersReport(): void
    {

//        dd($this->sellersWithOrdersDay->getSellersWithOrdersDay());

        foreach ($this->sellersWithOrdersDay->getSellersWithOrdersDay() as $seller)
        {
            SendMailSellersOrdersReport::dispatch($seller);
        }

    }

}
