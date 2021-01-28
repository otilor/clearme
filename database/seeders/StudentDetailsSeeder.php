<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory()->count(10)->create();
    }
}
