<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(InsertUserSeeder::class);
        $this->call(InsertColorSeeder::class);
        $this->call(InsertSizeSeeder::class);
        $this->call(InsertCategorySeeder::class);
        $this->call(InsertProductSeeder::class);
    }
}
