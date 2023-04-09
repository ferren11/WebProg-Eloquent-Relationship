<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use App\Models\UserMembership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory(7)->create()->each(
            function($user) {
                $userMembership = UserMembership::factory()->make();
                $user->userMembership()->save($userMembership);

                $orders = Order::factory(3)->make();
                $user->orders()->saveMany($orders);
            }
        );
    }
}
