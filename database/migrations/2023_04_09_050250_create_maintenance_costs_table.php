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
        Schema::create('maintenance_costs', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable(false);
            $table->string('month')->nullable(false);
            $table->string('year')->nullable(false);
            $table->string('maintenance_title', 100)->nullable(false);
            $table->decimal('amount')->nullable(false);
            $table->text('details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_costs');
    }
};
