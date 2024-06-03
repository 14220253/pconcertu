<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $nik = $this->generateNIK();

            DB::table('customers')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt($faker->password),
                'phone_number' => '08' . str_pad(mt_rand(0, 9999999999), 10, '0', STR_PAD_LEFT),
                'NIK' => $nik,
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
            ]);
        }
    }

    /**
     * Generate NIK
     *
     * @return string
     */
    private function generateNIK(): string
    {
        $part1 = chr(rand(65, 69)); // 'A' to 'E'
        $part2 = rand(11, 14);
        $part3 = rand(19, 23);
        $part4 = '0';
        $part5 = str_pad(rand(1, 300), 3, '0', STR_PAD_LEFT);

        return "$part1.$part2.$part3.$part4.$part5";
    }
}
