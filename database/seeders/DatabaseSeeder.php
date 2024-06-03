<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            EventOrganizerSeeder::class,

            PaymentMethodSeeder::class,

            MasterEventSeeder::class,
            EventSeeder::class,

            CustomerSeeder::class,

            GuestSeeder::class,
            GuestDetailSeeder::class,

            TicketTypeSeeder::class,

            SeatSeeder::class,


            TicketCategorySeeder::class,
            TicketSeeder::class,
            TicketCategoryDetailSeeder::class,

            TicketOrderDetailSeeder::class,

            MerchSeeder::class,
            MerchOrderSeeder::class,
            MerchOrderDetailSeeder::class,



            PromotionSeeder::class,
            PromotionDetailSeeder::class,

            ReviewSeeder::class,

        ]);
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
