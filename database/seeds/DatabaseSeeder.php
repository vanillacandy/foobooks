<?php

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
        # Because `books` will be associated with `authors`,
        # authors should be seeded first
        //$this->call(AuthorsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
    }
}
