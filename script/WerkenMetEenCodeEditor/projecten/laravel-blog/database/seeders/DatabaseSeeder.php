<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            CategorySeeder::class,
            ArticleSeeder::class,
            CommentSeeder::class,
            UserSeeder::class,
        ]);

        User::factory()->create([
            'username' => 'Test User',
        ]);

        User::factory()->count(5)->create();

        Category::factory()->count(5)->create();

        Article::factory()->count(5)->create();

    }
}

// classes that trigger one or more factories or database calls