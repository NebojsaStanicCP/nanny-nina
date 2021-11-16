<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $genderValue = $gender === 'male' ? 1 : 2;

        return [
            'firstname' => $this->faker->firstName($gender),
            'lastname' => $this->faker->lastName(),
            'address' => $this->faker->address(),
            'housenumber' => $this->faker->randomDigitNotNull(),
            'postalcode' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'phonenumber' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender' => $genderValue
        ];
    }

}
