<?php

namespace Tests\Feature;

use Database\Seeders\StudentSeeder;
use Tests\TestCase;

class StudentSeederTest extends TestCase
{
    /**
     * Test that student data can be seeded
     *
     * @test
     * @return void
     */
    public function student_data_can_be_seeded()
    {
        $seeder = $this->seed(StudentSeeder::class);
    }
}
