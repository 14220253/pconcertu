<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $word1 = 'True';
        $word2 = 'False';
        $organizer = DB::table('event_organizers')->pluck('id')->toArray();
        $master = DB::table('master_events')->pluck('id')->toArray();
        $fileContent = file_get_contents('public\picture1.png');
        for ($i = 0; $i < 100; $i++) {
            $randomNumber = rand(0, 1);

            $randomWord = ($randomNumber == 0) ? $word1 : $word2;
            $randomDate = $this->randomDate('2020-01-01', '2024-12-31');

            DB::table('events')->insert([
                'periods' => $randomDate,
                'location' => 'jl. ' . Str::random(10),
                'isGoPlus' => $randomWord,
                'denah' => '101010',
                'event_master_id' => $master[0],
                'event_organizer_id' => $organizer[0],
            ]);
        }
    }

    /**
     * Generate a random date.
     *
     * @param string $startDate Start date
     * @param string $endDate End date
     * @return string Random date in YYYY-MM-DD format
     */
    private function randomDate($startDate, $endDate): string
    {
        $startTimestamp = strtotime($startDate);
        $endTimestamp = strtotime($endDate);
        $randomTimestamp = rand($startTimestamp, $endTimestamp);
        return date('Y-m-d', $randomTimestamp);
    }
}
