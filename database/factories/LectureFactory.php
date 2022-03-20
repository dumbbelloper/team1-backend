<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lecture>
 */
class LectureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tutor_id' => random_int(1,5),
            'name' => $this->faker->name(),
            'is_event' => $this->faker->boolean,
            'category_id' => random_int(1,5)
        ];
    }
}
