<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TicketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('ticket_types')->insert(['name' => 'bronze',]);
            DB::table('ticket_types')->insert(['name' => 'silver',]);
            DB::table('ticket_types')->insert(['name' => 'gold',]);
            DB::table('ticket_types')->insert(['name' => 'platinum',]);
            DB::table('ticket_types')->insert(['name' => 'diamond',]);
            DB::table('ticket_types')->insert(['name' => 'tribune',]);
    }
}
