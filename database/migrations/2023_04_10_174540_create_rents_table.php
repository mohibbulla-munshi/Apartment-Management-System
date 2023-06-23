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
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string('floor_no')->nullable(false);
            $table->string('unit_no')->nullable(false);
            $table->string('rent_month')->nullable(false);
            $table->string('rent_year')->nullable(false);
            $table->string('renter_name', 100)->nullable(false);
            $table->decimal('rent')->nullable(false);
            $table->decimal('water_bill')->nullable(false);
            $table->decimal('electric_bill')->nullable(false);
            $table->decimal('gas_bill')->nullable(false);
            $table->decimal('security_bill')->nullable(false);
            $table->decimal('utility_bill')->nullable(false);
            $table->decimal('other_bill');
            $table->decimal('total_rent')->nullable(false);
            $table->date('issue_date')->nullable(false);
            $table->date('bill_paid_date')->nullable(false);
            $table->string('bill_status', 50)->nullable(false);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rents');
    }
};