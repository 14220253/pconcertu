<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MerchOrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $merch = DB::table('merches')->pluck('id')->toArray();
        for ($i = 0; $i < 100; $i++) {
            DB::table('merch_order_details')->insert([
                'merch_id' => $merch[0],
                'created_at' =>'now',
                'updated_at' =>'now'
            ]);
        }
    }
}
