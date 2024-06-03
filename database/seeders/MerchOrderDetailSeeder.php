<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MerchOrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $merch = DB::table('merches')->pluck('id')->toArray();
        $merch_orders = DB::table('merch_orders')->pluck('id')->toArray();


        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('merch_order_details')->insert([
                'merch_id' => $faker->randomElement($merch),
                'merch_order_id' => $faker->randomelement($merch_orders),
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
            ]);
        }
    }
}
