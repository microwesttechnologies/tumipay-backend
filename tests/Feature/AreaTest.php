<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AreaTest extends TestCase
{

    public function test_area(): void
    {
        $response = $this->get('/api/areas');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     '*' => [
                         'id_area',
                         'name_area',
                     ]
                 ]);
    }
}
