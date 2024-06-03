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
        Schema::create('merches', function (Blueprint $table) {
            $table->json('size');
            $table->json('color');
            $table ->json('variation');
            $table->integer('stock');
            $table->longText('description');
            $table->binary('product_picture');
            $table->foreignId('event_id')->constrained('events');
            $table->string('name');
            $table->bigInteger('price');
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merches');
    }
};
