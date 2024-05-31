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
        $customer = DB::table('customers')->pluck('id')->toArray();
        $ticket = DB::table('tickets')->pluck('id')->toArray();
        $type = DB::table('ticket_types')->pluck('id')->toArray();
        $seat = DB::table('seats')->pluck('id')->toArray();

        for ($i = 0; $i < 100; $i++) {
            DB::table('ticket_order_details')->insert([
                'customer_id' => $customer[0],
                'ticket_id' => $ticket[0],
                'ticket_type_id' => $type[0], 
                'seat_id' => $seat[0],
            ]);
        }
    }
}
