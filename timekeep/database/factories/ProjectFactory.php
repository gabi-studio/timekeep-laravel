<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'project_type' => $this->faker->word(),
            'start_date' => $this->faker->date(),
            'due_date' => $this->faker->date(),
            'status' => $this->faker->word(),
            'user_id' => $this->faker->numberBetween(1, 10),
            'link' => $this->faker->url(),
            'client_id' => $this->faker->numberBetween(1, 10),
            'notes' => $this->faker->sentence()
        ];
    }
}
