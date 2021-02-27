<?php

namespace Database\Seeders;

use App\Models\ClearanceRequest;
use Illuminate\Database\Seeder;

class ClearanceRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClearanceRequest::factory()->count(4)->create();
    }
}
