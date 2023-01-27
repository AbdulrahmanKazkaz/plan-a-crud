<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->jobTitle;
        $website = str()->slug($name) . '.com';
        $email = 'contact@' .  $website ;

        return [
            'name' => $name,
            'email' => $email,
            'logo' => 'https://via.placeholder.com/400x400.png',
            'website' => $website
        ];
    }
}
