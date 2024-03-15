<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        $user = User::all()->random();
        return [
            'user_id' => $user->id,
            'price' => $this->faker->numberBetween(1, 500),
            'email' => $user->email,
            'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled']),
            'payment_id' => null,
        ];
    }
}
