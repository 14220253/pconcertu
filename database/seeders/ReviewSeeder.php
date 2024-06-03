<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $customer = DB::table('customers')->pluck('id');
        $event = DB::table('events')->pluck('id');
        for ($i = 0; $i < 100; $i++) {
            DB::table('reviews')->insert([
                'review' => $faker->realText(500),
                'stars' => $faker->numberBetween(0,5),
                'customer_id' => $faker->randomElement($customer),
                'event_id' => $faker->randomElement($event),
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
            ]);
        }
    }
}
