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
        Schema::create('tb_property_facility_pivot', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('properties_id')->constrained('tb_properties');
            $table->foreignUuid('properties_facilities_id')->constrained('tb_properties_facilities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_property_facility_pivot');
    }
};
