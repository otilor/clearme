<?php

namespace Database\Seeders;

use App\Models\ClearanceRequest;
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
            User::factory(['email' => $studentEmail])->create()->assignRole('student');
        }
        for ($i = 0; $i < 10 ; $i++) {
            DB::transaction(function () {
                $user = User::factory()->create();
                ClearanceRequest::create(['user_id'=> $user->id]);
                $user->assignRole('student');
            });
        }
    }
}
