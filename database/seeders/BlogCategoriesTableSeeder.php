<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogCategory;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogCategory::insert([
            'category' => "Laravel"
        ]);

        BlogCategory::insert([
            'category' => "WordPress"
        ]);
        BlogCategory::insert([
            'category' => "Flutter"
        ]);
        BlogCategory::insert([
            'category' => "Freelance"
        ]);
    }
}
