<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TicketOrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = DB::table('customers')->pluck('id');
        $ticket = DB::table('tickets')->pluck('id');
        $type = DB::table('ticket_types')->pluck('id');
        $seat = DB::table('seats')->pluck('id');
        $faker = \Faker\Factory::create();


        for ($i = 0; $i < 100; $i++) {
            DB::table('ticket_order_details')->insert([
                'customer_id' => $faker->randomElement($customer),
                'ticket_id' => $faker->randomElement($ticket),
                'ticket_type_id' => $faker->randomElement($type),
                'seat_id' => $faker->randomElement($seat),
                'created_at' =>'now',
                'updated_at' =>'now'
            ]);
        }
    }
}
