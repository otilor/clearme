<?php

namespace Database\Seeders;

use App\Models\ClearanceRequest;
use App\Models\User;
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
        // create clearance request for all the students
        $studentIds = User::role('student')->pluck('id');


        $studentIds->each(function($id) {
            ClearanceRequest::factory()->state(['student_id' => $id])->create();
        });
    }
}
