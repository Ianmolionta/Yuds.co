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
        Schema::create('tb_expanses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('tittle');
            $table->decimal('amount', 12, 2);
            $table->string('category');
            $table->date('expanse_date');
            $table->string('receipt_url');
            $table->foreignUuid('properties_id')->constrained('tb_properties');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_expanses');
    }
};
