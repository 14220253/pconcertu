<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class EventOrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('event_organizers')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->companyEmail,
                'password' => bcrypt($faker->password),
                'phone' => '08' . str_pad(mt_rand(0, 9999999999), 10, '0', STR_PAD_LEFT),
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
            ]);
        }
    }
}
