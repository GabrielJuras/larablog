<?php

namespace Database\Factories;

use App\Models\para;
use App\Models\pic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\content>
 */
class contentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()-> text(50),
            'author'=>fake()-> text(60)
        ];
    }
}