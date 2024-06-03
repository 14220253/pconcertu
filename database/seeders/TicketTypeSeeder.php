<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TicketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('ticket_types')->insert(['name' => 'bronze','created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()]);
            DB::table('ticket_types')->insert(['name' => 'silver','created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()]);
            DB::table('ticket_types')->insert(['name' => 'gold','created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()]);
            DB::table('ticket_types')->insert(['name' => 'platinum','created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()]);
            DB::table('ticket_types')->insert(['name' => 'diamond','created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()]);
            DB::table('ticket_types')->insert(['name' => 'tribune','created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()]);
    }
}
