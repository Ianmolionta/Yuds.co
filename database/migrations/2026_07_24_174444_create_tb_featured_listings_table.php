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
        Schema::create('tb_featured_listings', function (Blueprint $table) {
            $table->uuid('id');
            $table->timestamp('starts_at');
            $table->timestamp('ends_at');
            $table->string('status');
            $table->foreignUuid('properties_id')->constrained('tb_properties');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_featured_listings');
    }
};
