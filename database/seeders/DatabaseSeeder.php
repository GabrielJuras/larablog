<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Para;
use App\Models\Pic;
use App\Models\User;
use Faker\Core\Number;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\For_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Content::factory(10)
                ->has(
                    Para::factory(count:rand(1,10))
                        ->has(
                            Pic::factory(count:rand(6,16))))
                ->create();
        
        
        }
            
    
}
