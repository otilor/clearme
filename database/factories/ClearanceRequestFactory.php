<?php

namespace Database\Factories;

use App\Models\ClearanceRequest;
use App\Models\Section;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClearanceRequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClearanceRequest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $user = User::factory()->afterCreating(function ($user){
                $user->assignRole('student');
            }),
            'current_phase' => 3,
            'passed_phases' => json_encode([1, 2]),
            'other_phases' => json_encode([4, 5, 6, 7, 8])
        ];
    }
}
