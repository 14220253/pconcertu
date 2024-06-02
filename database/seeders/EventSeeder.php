<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organizer = DB::table('event_organizers')->pluck('id');
        $master = DB::table('master_events')->pluck('id');
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $randomNumber = rand(0, 1);

            $randomDate = $this->randomDate('2020-01-01', '2024-12-31');

            DB::table('events')->insert([
                'periods' => $faker->date('Y-m-d', 'now'),
                'location' => $faker->address,
                'isGoPlus' => $faker->boolean,
                'denah' => $faker->imageUrl(640,480,'city',true,null,false,'jpg'),
                'poster' => $faker->imageUrl(640,480,'nightlife',true,null,false,'jpg'),
                'event_master_id' => $faker->randomElement($master),
                'event_organizer_id' => $faker->randomElement($organizer),
                'date'=> $faker->date('Y-m-d'),
                'dress_code' => $faker->colorName,
                'time'=> $faker->time(),
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
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
