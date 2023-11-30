<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Example;

class DataexampleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        
        Example::create([
                'name' => $faker->name,
                'nik' => 459968346,
                'phonenumber' => $faker->phoneNumber,
                'address' => $faker->address,
                'age' => $faker->numberBetween(18, 65)
        ]);
        
    }
}
