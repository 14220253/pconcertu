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
        Schema::create('merch_order_details', function (Blueprint $table) {
            $table->foreignId('merch_id')->constrained('merches');
            $table->foreignId('merch_order_id')->constrained('merch_orders');
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merch_order_details');
    }
};
