<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Faculty;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'matric_number' => 'AUL/SCI/17/' . $this->withFaker()->numberBetween(00001, 001221),
            'department_id' => Department::factory(),
            'faculty_id' => Faculty::factory(),
        ];
    }

    public function configure()
    {
        return $this->afterMaking(static function (User $user) {
            $user->assignRole('student');
            $this->afterCreating(static function ($user) {
                $user->assignRole('student');
            });
        });
    }

}
