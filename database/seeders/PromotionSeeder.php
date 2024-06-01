<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('promotions')->insert([
                'tandc' => $faker->realText(200),
                'amount' => $faker->numberBetween(5,60),
                'code' => $faker->word,
                'periods' => $faker->date('Y-m-d'),
            ]);
        }
    }
}
