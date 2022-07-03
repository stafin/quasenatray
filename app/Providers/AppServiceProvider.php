<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Application Commission
        $this->app->bind(
            'App\Http\Contracts\Commission\CommissionListInterface',
            'App\Application\Commission\CommissionList'
        );

        $this->app->bind(
            'App\Http\Contracts\Commission\CommissionCurrentInterface',
            'App\Application\Commission\CommissionCurrent'
        );

        $this->app->bind(
            'App\Http\Contracts\Commission\CommissionPersistInterface',
            'App\Application\Commission\CommissionPersist'
        );

        //Repositories Commission
        $this->app->bind(
            'App\Application\Commission\Contracts\CommissionListRepository',
            'App\Repositories\Commission\CommissionRepository'
        );

        $this->app->bind(
            'App\Application\Commission\Contracts\CommissionCurrentRepository',
            'App\Repositories\Commission\CommissionRepository'
        );

        $this->app->bind(
            'App\Application\Commission\Contracts\CommissionPersistRepository',
            'App\Repositories\Commission\CommissionRepository'
        );


        //Application Sellers
        $this->app->bind(
            'App\Http\Contracts\Seller\SellerListInterface',
            'App\Application\Seller\SellerList'
        );

        $this->app->bind(
            'App\Http\Contracts\Seller\SellerPersistInterface',
            'App\Application\Seller\SellerPersist'
        );

        $this->app->bind(
            'App\Http\Contracts\Seller\SellersWithOrdersDayInterface',
            'App\Application\Seller\SellersWithOrdersDay'
        );


        //Repositories Sellers
        $this->app->bind(
            'App\Application\Seller\Contracts\SellerListRepository',
            'App\Repositories\Seller\SellerRepository'
        );

        $this->app->bind(
            'App\Application\Seller\Contracts\SellerPersistRepository',
            'App\Repositories\Seller\SellerRepository'
        );

        $this->app->bind(
            'App\Application\Seller\Contracts\SellersWithOrdersDayRepository',
            'App\Repositories\Seller\SellerRepository'
        );


        //Application Orders
        $this->app->bind(
            'App\Http\Contracts\Order\OrderListInterface',
            'App\Application\Order\OrderList'
        );

        $this->app->bind(
            'App\Http\Contracts\Order\OrderPersistInterface',
            'App\Application\Order\OrderPersist'
        );

        //Repositories Orders
        $this->app->bind(
            'App\Application\Order\Contracts\OrderListRepository',
            'App\Repositories\Order\OrderRepository'
        );

        $this->app->bind(
            'App\Application\Order\Contracts\OrderPersistRepository',
            'App\Repositories\Order\OrderRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
