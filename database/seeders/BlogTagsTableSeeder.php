<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogTag;

class BlogTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogTag::insert([
            'tag' => "Tutorial"
        ]);

        BlogTag::insert([
            'tag' => "Snippets"
        ]);

        BlogTag::insert([
            'tag' => "Tips"
        ]);

        BlogTag::insert([
            'tag' => "Tools"
        ]);

        BlogTag::insert([
            'tag' => "Software"
        ]);

        BlogTag::insert([
            'tag' => "Hardware"
        ]);
    }
}
