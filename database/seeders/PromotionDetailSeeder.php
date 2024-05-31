<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PromotionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ticket = DB::table('tickets')->pluck('id')->toArray();
        $promotion = DB::table('promotions')->pluck('id')->toArray();

        for ($i = 0; $i < 100; $i++) {
            DB::table('promotion_details')->insert([
                'ticket_id' => $ticket[0],
                'promotion_id' => $promotion[0],
            ]);
        }
    }
}
