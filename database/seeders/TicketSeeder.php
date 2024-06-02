<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = DB::table('events')->pluck('id');
        $paymentMethod = DB::table('payment_methods')->pluck('id');
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('tickets')->insert([
                'price' => $faker->numberBetween(100000,5000000),
                'rating' => $faker->numberBetween(0,5),
                'review' => $faker->realText(200),
                'event_id' => $faker->randomElement($event),
                'payment_method_id' => $faker->randomElement($paymentMethod),
                'created_at' =>'now',
                'updated_at' =>'now'
            ]);
        }
    }
}
