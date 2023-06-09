<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
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
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'mobile' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'profile_pic' => $this->faker->imageUrl(640, 480, 'person', true),
            'no_of_vehicle' => $this->faker->randomNumber(),
            'password' => $this->faker->password(),
        ];
    }
}
