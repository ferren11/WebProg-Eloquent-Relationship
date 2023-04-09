<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'order_id' => fake()->numerify('O######'),
            'order_received' => fake()->unique()->dateTimeBetween($startDate = '-30 days', $endDate = 'now', $timezone = null)->format('Y-m-d H:i:s'),
            'total_price' => fake()->randomFloat('2', 10, 10000),
            'status_payment' => fake()->randomElement([
                Order::STATUS_PAYMENT_PENDING,
                Order::STATUS_PAYMENT_PROCESSED,
                Order::STATUS_PAYMENT_FINISHED,
            ]),
        ];
    }
}
