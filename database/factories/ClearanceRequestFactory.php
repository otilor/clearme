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
                    'bursary' => ClearanceRequest::PENDING,
                    'admin' => ClearanceRequest::PENDING,
                    'student-affairs' => ClearanceRequest::PENDING,
                    'laboratories' => ClearanceRequest::PENDING,
                    'halls-of-residence' => ClearanceRequest::PENDING,
                    'head-of-department' => ClearanceRequest::PENDING,
                    'ict-unit' => ClearanceRequest::PENDING,
                    'security' => ClearanceRequest::PENDING,
                    'medicals' => ClearanceRequest::PENDING,
                    'sports' => ClearanceRequest::PENDING,
                ]
            ],
        ];
    }
}
