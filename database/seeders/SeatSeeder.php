<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type = DB::table('ticket_types')->pluck('id')->toArray();
        $faker = \Faker\Factory::create();


        for ($i = 0; $i < 100; $i++) {

            DB::table('seats')->insert([
                'status' => $faker->boolean,
                'ticket_type_id' => $faker->randomElement($type),
                'created_at' =>'now',
                'updated_at' =>'now'
            ]);
        }
    }
}
