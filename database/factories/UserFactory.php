<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'pseudo' => $this->faker->userName,
            'telephone' => $this->faker->unique()->phoneNumber,
            'ref_cnib' => $this->faker->unique()->swiftBicNumber,
            'role' => $this->faker->randomElement(['moderateur', 'administrateur', 'utilisateur']),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Default password for all users
            'admin_id' => null, // Or set a specific admin ID if needed
            'supprimer_par_id' => null, // Or set a specific user ID if needed
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
