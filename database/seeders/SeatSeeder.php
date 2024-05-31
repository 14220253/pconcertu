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

        for ($i = 0; $i < 100; $i++) {

            DB::table('seats')->insert([
                'status' => Str::random(10),
                'ticket_type_id' => $type[0],
            ]);
        }
    }
}
