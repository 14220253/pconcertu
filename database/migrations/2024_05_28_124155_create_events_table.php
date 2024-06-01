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
        Schema::create('events', function (Blueprint $table) {
            $table->dateTime('periods');
            $table->longText('location');
            $table->boolean('isGoPlus');
            $table->binary('denah');
            $table->foreignId('event_master_id')->constrained('master_events');
            $table->foreignId('event_organizer_id')->constrained('event_organizers');
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
