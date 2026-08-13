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
        Schema::create('tb_rooms', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('room_number');
            $table->decimal('price_mounthly', 12, 2);
            $table->decimal('price_daily', 12, 2);
            $table->enum('status', ['avilable', 'occupied', 'maintenance']);
            $table->string('floor')->default('1');
            $table->text('description');
            $table->jsonb('facilities')->nullable();
            $table->foreignUuid('properties_id')->constrained('tb_properties');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_rooms');
    }
};
