<?php

namespace Database\Factories;


use Ramsey\Uuid\Type\Integer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => fake()->firstname(),
            'secondname' => fake()->lastName,
            'date_of_birth' => fake()->dateTimeBetween('-30 years','-20 years'),
            'gender' =>  $this->faker->randomElement(['Male', 'Female','Other']),
            'national_id' => rand(1000000000, 9999999999),
            'contact_info' => rand(1000000000, 9999999999),
            'user_id' => rand(1 ,2),
            
        ];
    }
}
