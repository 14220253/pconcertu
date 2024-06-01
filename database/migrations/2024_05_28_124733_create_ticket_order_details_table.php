<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ticket_order_details', function (Blueprint $table) {
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('ticket_id')->constrained('tickets');
            $table->foreignId('ticket_type_id')->constrained('ticket_types');
            $table->foreignId('seat_id')->constrained('seats');
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_order_details');
    }
};
