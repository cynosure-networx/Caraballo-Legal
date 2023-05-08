<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPostTag;
// use Faker\Generator as Faker;

class BlogPostTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 20; $i++) {
            BlogPostTag::insert([ //,
                'post_id' => $i,
                'tag_id' => $faker->numberBetween($min = 1, $max = 6),
            ]);
        }
    }
}
