<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TicketCategoryDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = DB::table('ticket_categories')->pluck('id')->toArray();
        $ticket = DB::table('tickets')->pluck('id')->toArray();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('ticket_category_details')->insert([
                'ticket_category_id' => $faker->randomElement($category),
                'ticket_id' => $faker->randomElement($ticket),
                'created_at' =>'now',
                'updated_at' =>'now'
            ]);
        }
    }
}
