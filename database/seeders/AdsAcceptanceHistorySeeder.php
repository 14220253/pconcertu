<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
class AdsAcceptanceHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $word1 = 'Accepted';
        $word2 = 'Denied';
        $word3 = 'Pending';

        for ($i = 0; $i < 100; $i++) {
            $randomNumber = rand(0, 2);

            $randomWord = ($randomNumber == 0) ? $word1 : (($randomNumber == 1) ? $word2 : $word3);
            DB::table('ads_acceptance_histories')->insert([
                'status' => $randomWord,
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
            ]);
        }
    }
}
