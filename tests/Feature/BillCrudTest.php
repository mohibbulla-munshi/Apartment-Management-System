<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BillCrudTest extends TestCase
{

    use RefreshDatabase;
    public function testIndex(): void
    {
        $response = $this->get('/bill');

        $response->assertStatus(200);
    }
}
