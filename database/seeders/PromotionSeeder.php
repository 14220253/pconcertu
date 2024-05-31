<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 1000; $i++) {
            DB::table('promotions')->insert([
                'tandc' => Str::random(100),
                'amount' => rand(1, 10),
                'code' => Str::random(3), 
                'periods' => rand(0, 50),
            ]);
        }
    }
}
