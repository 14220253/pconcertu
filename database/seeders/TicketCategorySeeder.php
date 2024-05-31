<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TicketCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('ticket_categories')->insert(['ticket_category_name' => 'presale',]);
            DB::table('ticket_categories')->insert(['ticket_category_name' => 'early bird',]);
            DB::table('ticket_categories')->insert(['ticket_category_name' => 'regular',]);
    }
}
