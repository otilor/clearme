<?php

namespace Tests\Feature;

use Database\Seeders\StudentSeeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentSeederTest extends TestCase
{
    protected $seed = true;
    /**
     * Test that student data can be seeded
     *
     * @test
     * @return void
     */
    public function student_data_can_be_seeded()
    {
        $this->seed(StudentSeeder::class)->assertDatabaseHas('users', [
            'email' => 'student@clearme.test'
        ]);
    }
}
