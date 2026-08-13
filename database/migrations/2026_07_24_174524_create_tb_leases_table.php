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
        Schema::create('tb_leases', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('tenant_name');
            $table->string('tenant_phone');
            $table->string('tenant_ktp');
            $table->string('tenant_image_url');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('due_day_of_month');
            $table->enum('status', ['completed', 'canceled', 'pending']);
            $table->text('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_leases');
    }
};
