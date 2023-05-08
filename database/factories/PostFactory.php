<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => $this->faker->unique()->word,
            'title' => $this->faker->unique()->sentence($nbWords = 6),
            'description' => $this->faker->paragraph($nbSentences = 1),
            'content' => $this->faker->text,
            'blog' => '1',
            'category_id' => $this->faker->numberBetween($min = 1, $max = 4),
            'author_id' => $this->faker->numberBetween(3, 50),
            'image' => $this->faker->randomElement($array = array('blog-one.jpg', 'blog-two.jpg', 'blog-three.jpg')),
            'published_at' => $this->faker->dateTimeBetween('-1 month', '+3 days'),
            'created_at' => $this->faker->dateTimeBetween('-1 month', '+3 days'),
        ];
    }
}
