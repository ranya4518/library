<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use Illuminate\Database\Seeder;
use faker\Factory as faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     $faker=faker::create();
     for($i=1;$i<=5;$i++){
        Book::create([
        'id'=>$i,
        'title'=>$faker->sentence,
        'author'=>$faker->name,
        'summary'=>$faker->paragraph,
        'published_date'=>$faker->date,
        ]);
     }  
    }
}
