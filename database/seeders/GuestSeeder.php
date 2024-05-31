<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('guests')->insert([
                'guest_name' => Str::random(10),
                'guest_email' => Str::random(10) . '@example.com',
                'guest_number' => '08' . str_pad(mt_rand(0, 9999999999), 10, '0', STR_PAD_LEFT),
            ]);
        }
    }
}
