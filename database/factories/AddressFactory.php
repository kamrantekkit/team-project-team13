<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'first_line' => $this->faker->word(),
            'second_line' => $this->faker->word(),
            'city' => $this->faker->city(),
            'postcode' => $this->faker->postcode(),
        ];
    }
}
