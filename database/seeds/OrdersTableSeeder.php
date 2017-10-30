<?php

use App\Order;
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
        Order::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few Orders in our database:
        for ($i = 0; $i < 50; $i++) {
            Order::create([
                'email' => $faker->email,
                'total_amount_net' => $faker->text,
                'shipping_costs' => $faker->text,
                'payment_method' => $faker->text,
            ]);
        }
        // factory(App\Order::class, 10)->create();
    }
}
