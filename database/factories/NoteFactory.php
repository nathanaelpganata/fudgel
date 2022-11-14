<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->word,
            'urgency' => 'high',
            'impact' => 'low',
            'location' => $this->faker->unique()->word,
            'description' => $this->faker->paragraph(3),
            'tags' => 'work',
            'is_done' => $this->faker->boolean(),
            'deadline_at' => $this->faker->dateTimeBetween('+0 days', '+1 month')
        ];
    }
}
