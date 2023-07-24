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
        Schema::create('reserveds', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->id();
            $table->string('parking_id');
            $table->string('spot_id');
            $table->string('driver')->nullabel();
            $table->string('vehicle')->nullabel();
            $table->date('reserved_on')->nullabel();
            $table->date('reserved_until')->nullabel();
            $table->string('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserveds');
    }
};
