<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MerchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = DB::table('events')->pluck('id');
        $faker = \Faker\Factory::create();
        $color = ['White', 'Blue', 'Black', 'Pink', 'Red', 'Yellow', 'Green'];
        $size = ['XS', 'S', 'M', 'L', 'XL', 'XXL'];

        for ($i = 0; $i < 100; $i++) {
            DB::table('merches')->insert([
                'size' => $faker->randomElement($size),
                'color' => $faker->randomElement($color),
                'variation' => $faker->word,
                'stock' => $faker->numberBetween(0,50),
                'description' => $faker->realText,
                'event_id' => $faker->randomElement($event),

            ]);
        }
    }
}
