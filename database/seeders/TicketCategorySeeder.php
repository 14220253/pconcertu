<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TicketCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('ticket_categories')->insert(['ticket_category_name' => 'presale','created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()]);
            DB::table('ticket_categories')->insert(['ticket_category_name' => 'early bird','created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()]);
            DB::table('ticket_categories')->insert(['ticket_category_name' => 'regular','created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()]);

    }
}
