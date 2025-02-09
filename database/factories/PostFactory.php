<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraph(mt_rand(5,10)),
            'user_id' => mt_rand(1, 3), //Penulis postingan ditetapkan secara acak dari pengguna dengan id 1, 2, atau 3.
            'category_id' => mt_rand(1, 2)
            // 'user_id' => 1,
            // 'category_id' => 1
        ];
    }
}
