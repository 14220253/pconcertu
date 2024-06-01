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
        $event = DB::table('events')->pluck('id')->toArray();
        $paymentMethod = DB::table('payment_methods')->pluck('id')->toArray();

        for ($i = 0; $i < 100; $i++) {
            DB::table('tickets')->insert([
                'price' => rand(100000, 3000000),
                'rating' => rand(0, 5),
                'review' => Str::random(100), 
                'event_id' => $event[0],
                'payment_method_id' => $paymentMethod[0],
            ]);
        }
    }
}
