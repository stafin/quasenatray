<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class OrderTest extends TestCase
{

    public function test_check_list_orders_from_sellers_response(): void
    {

        $response = $this->get('/api/ordersfromseller/1');
        $response->assertStatus(200);

    }


    public function test_check_list_orders_response(): void
    {

        $response = $this->get('/api/orders');
        $response->assertStatus(200);

    }


    public function test_create_order_response(): void
    {

        $response = $this->postJson('/api/orders', [
            "vendedor_id"  => 1,
            "venda_valor"  => 251.98
        ]);

        $response
            ->assertStatus(201)
            ->assertJsonPath('data.venda_valor', 251.98);

    }

}
