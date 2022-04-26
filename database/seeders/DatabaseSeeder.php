<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use App\Models\Variation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(['name' => 'Alice'])
            ->has(Book::factory(['title' => 'PHPBook'])->has(Variation::factory(['kind' => 'paper book'])))
            ->has(Book::factory(['title' => 'LaravelGuide'])->has(Variation::factory(['kind' => 'PDF'])))
            ->create();

        User::factory(['name' => 'Bob'])
            ->has(Book::factory(['title' => 'LaravelGuide'])->has(Variation::factory(['kind' => 'PDF'])))
            ->create();

        User::factory(['name' => 'Cameron'])->create();
    }
}
