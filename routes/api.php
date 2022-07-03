<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommissionsController;
use App\Http\Controllers\SellersController;
use App\Http\Controllers\OrdersController;

use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Commissions
Route::post('/commissions', [CommissionsController::class, 'store']);
Route::get('/commissions', [CommissionsController::class, 'index']);
Route::get('/commissions/current', [CommissionsController::class, 'currentCommission']);

//Sellers
Route::post('/sellers', [SellersController::class, 'store']);
Route::get('/sellers', [SellersController::class, 'index']);

//Orders
Route::post('/orders', [OrdersController::class, 'store']);
Route::get('/orders/{id}', [OrdersController::class, 'index'])->name('getOrders');

Route::get('/mailreport', [MailController::class, 'sendMailSellersOrdersReport']);
