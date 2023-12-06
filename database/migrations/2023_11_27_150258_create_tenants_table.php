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
        Schema::create('tenants', function (Blueprint $table) {
             $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact');
            $table->text('address');
            $table->string('nid');
            $table->string('floor_no');
            $table->string('available_unit_no');
            $table->decimal('advance_rent', 10, 2);
            $table->decimal('rent_per_month', 10, 2);
            $table->date('issue_date');
            $table->string('rent_month');
            $table->string('rent_year');
            $table->string('status');
            $table->string('tenant_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
