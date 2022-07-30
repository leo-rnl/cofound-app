<?php

namespace Database\Factories;

use App\Models\User;
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
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'bio' => $this->faker->paragraph(),
            'logo' => '/storage/default.png',
            'description' => $this->faker->paragraph(6),
            'slogan' => $this->faker->sentence(),
            'user_id' => User::factory()
        ];
    }
}
