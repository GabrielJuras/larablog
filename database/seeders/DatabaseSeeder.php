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

        Content::factory(10)->create();
        
        for ($i=0; $i <10 ; $i++) { 
            Para::factory()->count(5)->create(); 
        }
        for ($i=0; $i <50 ; $i++) { 
            Pic::factory()->count(4)->create(); 
        }
            
    }
}
