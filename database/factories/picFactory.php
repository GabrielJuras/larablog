<?php

namespace Database\Factories;

use App\Models\Content;
use App\Models\Para;
use App\Models\Pic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pic>
 */
class picFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {        
        return [
            'url'=>'https://picsum.photos/id/'.(string)rand(1,100).'/200/300',
            'iname'=>fake()->text(20),    
                
                ]   ;
    }
}
