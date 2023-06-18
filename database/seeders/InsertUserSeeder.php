<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class InsertUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i< 5; $i++ ) {
            User::create([
                'name' => "customer " . $i + 1,
                'email' => "customer". $i + 1 . "@saasforest.com",
                'password' => Hash::make('customer@123')
            ]);
        }
    }
}
