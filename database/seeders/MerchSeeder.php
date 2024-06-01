<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MerchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $word1 = 'Small';
        $word2 = 'Medium';
        $word3 = 'Large';
        $event = DB::table('events')->pluck('id')->toArray();

        for ($i = 0; $i < 100; $i++) {
            $randomNumber = rand(0, 2);

            $randomWord = ($randomNumber == 0) ? $word1 : (($randomNumber == 1) ? $word2 : $word3);

            DB::table('merches')->insert([
                'size' => $randomWord,
                'color' => Str::random(10),
                'variation' => Str::random(10), 
                'stock' => rand(0, 50),
                'description' => Str::random(100),
                'event_id' => $event[0],
            ]);
        }
    }
}
