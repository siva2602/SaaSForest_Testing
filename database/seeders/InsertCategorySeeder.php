<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsertCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => "MEN'S"],
            ['name' => "KID'S"],
            ['name' => "SPORTSWARE"],
            ['name' => "DRESSES"],
            ['name' => "HOME"],
            ['name' => "ACCESSORICES"],
            ['name' => "SLEEPWARE"],
            ['name' => "WOMEN'S"]
        ];

        Category::insert($categories);
    }
}
