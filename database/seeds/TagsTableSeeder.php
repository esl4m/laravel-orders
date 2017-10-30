<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate existing records to start from scratch.
        Tag::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few tags in our database:
        for ($i = 0; $i < 50; $i++) {
            Tag::create([
                'name' => $faker->name,
            ]);
        }
    }
}
