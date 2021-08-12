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
            'student_id' => User::factory()->create(),
             'payload' => [
                 'status' =>
                [
                    'academic-affairs' => ClearanceRequest::PENDING,
                    'university-library' => ClearanceRequest::PENDING,
                    'bursary-department' => ClearanceRequest::PENDING,
                    'faculty' => ClearanceRequest::PENDING,
                    'student-affairs' => ClearanceRequest::PENDING,
                    'laboratories' => ClearanceRequest::PENDING,
                    'hall-of-residence' => ClearanceRequest::PENDING,
                    'head-of-department' => ClearanceRequest::PENDING,
                    'ict-unit' => ClearanceRequest::PENDING,
                    'security' => ClearanceRequest::PENDING,
                    'sports' => ClearanceRequest::PENDING,
                    'biology-laboratory' => ClearanceRequest::PENDING,
                    'microbiology-laboratory' => ClearanceRequest::PENDING,
                    'chemistry-laboratory' => ClearanceRequest::PENDING,
                    'biochemistry-laboratory' => ClearanceRequest::PENDING,
                    'physics-laboratory' => ClearanceRequest::PENDING,
                    'language-laboratory' => ClearanceRequest::PENDING,
                    'mass-communication-studio' => ClearanceRequest::PENDING,
                ],
                 'conditions' => [
                     'mass-communication-studio' => Condition::where('slug','mass-communication-studio')->first()->payload,
                 ]
            ],
        ];
    }
}
