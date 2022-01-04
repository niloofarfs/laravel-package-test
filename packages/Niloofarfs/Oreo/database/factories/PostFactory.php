<?php

namespace Niloofarfs\Oreo\Database\Factories;

use Niloofarfs\Oreo\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'body' => $this->faker->text(200),
        ];
    }
}