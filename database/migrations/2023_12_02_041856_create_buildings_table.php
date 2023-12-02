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
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('contact_no');
            $table->string('security_guard_mobile')->nullable();
            $table->string('secretary_mobile')->nullable();
            $table->string('moderator_mobile')->nullable();
            $table->year('construction_year');
            $table->string('address');
            $table->string('building_image')->nullable();
            $table->enum('status', ['enable', 'disable']);
            $table->string('company_name')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_address')->nullable();
            $table->text('apartment_rules')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buildings');
    }
};
