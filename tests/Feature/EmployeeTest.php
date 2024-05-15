<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    public function test_employees_list(): void
    {
        $response = $this->get('/api/employees');

        $response->assertStatus(200)
            ->assertJsonStructure([
                '*' => [
                    'id_employee',
                    'full_name',
                    'hire_date',
                    'email',
                    'name_company',
                    'name_area',
                    'name_category',
                    'satisfaction_level',
                ]
            ]);
    }

}
