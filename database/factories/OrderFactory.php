<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomNumber(),
            'price' => $this->faker->randomNumber(),
            'first_line_address' => $this->faker->address(),
            'second_line_address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'postcode' => $this->faker->postcode(),
            'payment_id' => $this->faker->word(),
        ];
    }
}
