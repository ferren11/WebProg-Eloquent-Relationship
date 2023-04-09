<?php

namespace Database\Factories;

use App\Models\UserMembership;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserMembership>
 */
class UserMembershipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'membershipType' => fake()->randomElement([
                UserMembership::MEMBERSHIP_TYPE_STANDARD,
                UserMembership::MEMBERSHIP_TYPE_VIP,
            ]),
        ];
    }
}
