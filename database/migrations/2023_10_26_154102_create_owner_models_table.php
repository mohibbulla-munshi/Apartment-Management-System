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
        Schema::create('owner_models', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('email');
            $table->string('contact_no');
            $table->string('password');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('nid');
            $table->string('owner_unit_no');
            $table->string('owner_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owner_models');
    }
};
