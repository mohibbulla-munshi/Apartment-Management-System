<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('bill_type')->nullable(false);
            $table->date('bill_deposit_date')->nullable(false);
            $table->string('bill_month')->nullable(false);
            $table->string('bill_year')->nullable(false);
            $table->decimal('total_amount')->nullable(false);
            $table->string('deposit_bank_name', 100)->nullable(false);
            $table->text('details')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
