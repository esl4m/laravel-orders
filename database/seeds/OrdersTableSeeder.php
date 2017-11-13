<?php

use App\Order;
use App\User;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate existing records to start from scratch.
        DB::table('orders')->delete();

        $faker = \Faker\Factory::create();

        // And now, let's create a few Orders in our database:
        for ($i = 0; $i < 50; $i++) {
            Order::create([
                'email' => User::all()->pluck('email')->random(),
                'total_amount_net' => $faker->text,
                'shipping_costs' => $faker->text,
                'payment_method' => $faker->text,
            ]);
        }
    }
}
