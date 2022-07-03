<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CommissionTest extends TestCase
{

    public function test_check_list_all_commission_response(): void
    {

        $response = $this->get('/api/commissions');
        $response->assertStatus(200);

    }


    public function test_check_get_current_commission_response(): void
    {

        $response = $this->get('/api/commissions/current');
        $response->assertStatus(200);

    }


    public function test_create_commission_response(): void
    {

        $response = $this->postJson('/api/commissions', [
            "percentage" => "8.5"
        ]);

        $response
            ->assertStatus(201)
            ->assertJsonPath('data.porcentagem', '8.5');

    }

}
