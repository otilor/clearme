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
            'current_phase' => 3,
             'payload' => [
                 'status' =>
                [
                    'bursary' => ClearanceRequest::PENDING,
                    'admin' => ClearanceRequest::PENDING,
                    'student_affairs' => ClearanceRequest::PENDING,
                    'laboratories' => ClearanceRequest::PENDING,
                    'halls_of_residence' => ClearanceRequest::PENDING,
                    'head_of_department' => ClearanceRequest::PENDING,
                    'ict' => ClearanceRequest::PENDING,
                    'security' => ClearanceRequest::PENDING,
                    'medicals' => ClearanceRequest::PENDING,
                    'sports' => ClearanceRequest::PENDING,
                ]
            ],
            'passed_phases' => json_encode([1, 2]),
            'other_phases' => json_encode([4, 5, 6, 7, 8])
        ];
    }
}
