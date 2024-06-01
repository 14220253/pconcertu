<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GuestDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('guest_details')->insert([
                'role' => $faker->word,
            ]);
        }
    }
}
