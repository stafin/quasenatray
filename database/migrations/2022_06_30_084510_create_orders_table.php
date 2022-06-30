<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id');
            $table->unsignedDecimal('order_value', 13, 2)->default(0);
            $table->unsignedBigInteger('commission_id');
            $table->unsignedDecimal('commission_value', 13,2)->default(0);
            $table->timestamps();
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('restrict');
            $table->foreign('commission_id')->references('id')->on('commissions')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
