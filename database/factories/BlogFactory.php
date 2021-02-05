<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'blog' => $this->getFakeBlog(),
            'author' => $this->faker->name
        ];
    }
    private function getFakeBlog(){
        $paragraphs = rand(4, 7);
        $i = 0;
        $blog = "";
        while ($i < $paragraphs) {
            $blog .= '<p>' . $this->faker->paragraph(rand(2, 6)) . '</p>';
            $i++;
        }
        return $blog;
    }
}
