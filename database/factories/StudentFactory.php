<?php

namespace Database\Factories;

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
        ];
    }
    public function configure()
    {
        return $this->afterMaking(function (User $user) {
            $user->assignRole('student');
            $this->afterCreating(static function ($user) {
                $user->assignRole('student');
            });
        });
    }

}
