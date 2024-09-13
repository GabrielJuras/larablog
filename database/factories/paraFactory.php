<?php

namespace Database\Factories;

use App\Models\Content;
use App\Models\Para;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\para>
 */
class paraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   

        return [
            'paratitle'=> fake()-> text(50),
            'para'=>fake()->text(200),
            'content_id'=>fake()->randomElement(Content::pluck('id'))
        ];
    }
}
