<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class SellerTest extends TestCase
{


    public function test_check_list_sellers_response(): void
    {

        $response = $this->get('/api/sellers');
        $response->assertStatus(200);

    }


    public function test_create_seller_response(): void
    {

        $randEmail = "email@".Str::random(5)."com";

        $response = $this->postJson('/api/sellers', [
            "nome"  => "Fulano da Silva Teste",
            "email" => $randEmail
        ]);

        $response
            ->assertStatus(201)
            ->assertJsonPath('data.email', $randEmail);

    }

}
