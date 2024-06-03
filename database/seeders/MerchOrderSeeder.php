<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MerchOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $ticket = DB::table('tickets')->pluck('id')->toArray();
    $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('merch_orders')->insert([
                'id' => $i,
                'ticket_id'=> $faker->randomElement($ticket),
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
            ]);
        }
    }
}
