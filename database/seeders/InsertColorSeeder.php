<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsertColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = [
            ['color' => 'Cadet Blue', 'code' => '#607d8a'],
            ['color' => 'Camel', 'code' => '#7a5548'],
            ['color' => 'Ivory', 'code' => '#9e9e9e']
        ];

        Color::insert($colors);
    }
}
