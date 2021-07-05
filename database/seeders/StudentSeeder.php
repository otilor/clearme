<?php

namespace Database\Seeders;

use App\Models\ClearanceRequest;
use App\Models\Section;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studentEmail = 'student@clearme.test';
        if (! User::where('email', $studentEmail)->first()) {
            $user = User::factory(['email' => $studentEmail])->create()->assignRole('student');
            // TODO: write test to ensure all students have a clearance request
            ClearanceRequest::factory()->state(['student_id' => $user->id]);
        }
        for ($i = 0; $i < 10 ; $i++) {
            DB::transaction(function () {
                $user = User::factory()->create();
                ClearanceRequest::factory()->state(['student_id' => $user->id]);
                $user->assignRole('student');
            });
        }
    }
}
