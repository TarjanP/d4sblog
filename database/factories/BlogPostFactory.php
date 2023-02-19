<?php

namespace Database\Factories;

use App\Models\User;
use app\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence, //Generates a fake sentence
			'body' => $this->faker->paragraph(10), //Generates fake 30 paragraphs
			'user_name' => User::factory() //Generates a User from factory and extracts id
        ];
    }
}
?>