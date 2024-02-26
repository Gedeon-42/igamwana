<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'Fullname'=>$this->faker->sentence(),
            'email'=>$this->faker->email(),
            'DOB'=>$this->faker->sentence(),
            'province'=>$this->faker->city(),
            'district'=>$this->faker->city(),
            'sector'=>$this->faker->city(),
            'cell'=>$this->faker->city(),
            'village'=>$this->faker->city(),
            'courseteach'=>$this->faker->sentence(),
            'gender'=>$this->faker->city(),
            'degree'=>$this->faker->sentence(),
            'Phone'=>$this->faker->sentence(),
        ];
    }
}
