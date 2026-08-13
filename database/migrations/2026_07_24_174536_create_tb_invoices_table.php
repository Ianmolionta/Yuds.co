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
        Schema::create('tb_invoices', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('invoice_number');
            $table->decimal('amount', 12,2);
            $table->date('due_date');
            $table->enum('status', ['unpaid', 'pending', 'paid', 'overdue', 'canceled']);
            $table->string('payment_proof_url');
            $table->timestamp('paid_at');
            $table->foreignUuid('leases_id')->constrained('tb_leases');
            $table->foreignUuid('rooms_id')->constrained('tb_rooms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_invoices');
    }
};
