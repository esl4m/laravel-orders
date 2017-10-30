<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate existing records to start from scratch.
        Item::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few items in our database:
        for ($i = 0; $i < 50; $i++) {
            Item::create([
                'name' => $faker->name,
                'qnt' => $faker->numberBetween(1, 200),
                'value' => $faker->numberBetween(1, 1264),
                'category' => $faker->word,
                'subcategory' => $faker->word,
                'collection_id' => $faker->numberBetween(0, 1264),
            ]);
        }
    }
}
