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
        Schema::create('flat_details', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->id();
            $table->string('user_id')->nullable(false);
            $table->string('flat_owner_id')->nullable(false);
            $table->string('flat_resident_id')->nullable(false);
            $table->string('flat_name')->nullable(false);
            $table->string('flat_floor_no')->nullable(false);
            $table->string('flat_rent')->nullable(false);
            $table->string('flat_size')->nullable(true);
            $table->string('flat_details')->nullable(true);
            $table->text('additional_info')->nullable(true);
            $table->string('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flat_details');
    }
};
