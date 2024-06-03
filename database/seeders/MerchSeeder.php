<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MerchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = DB::table('events')->pluck('id');
        $faker = \Faker\Factory::create();
        $size = ['XS', 'S', 'M', 'L', 'XL', 'XXL'];

        for ($i = 0; $i < 100; $i++) {
            DB::table('merches')->insert([
                'size' => [$faker->randomElement($size), $faker->randomElement($size), $faker->randomElement($size)],
                'color' => [$faker->colorName, $faker->colorName, $faker->colorName],
                'product_picture' => $faker->imageUrl(640, 480, 'fashion', true, null, false, 'jpg'),
                'variation' => $faker->word,
                'stock' => $faker->numberBetween(0, 50),
                'name' => $faker->lastName,
                'description' => $faker->realText,
                'event_id' => $faker->randomElement($event),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]);
        }
    }
}
