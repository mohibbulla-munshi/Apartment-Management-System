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
        Schema::create('unit_models', function (Blueprint $table) {
            $table->id(); // Assuming 'id' is an auto-increment primary key

            $table->string('floor_name');
            $table->string('unit_name');

            // Define 'floor_id' as a foreign key referencing another table's 'id' column
            $table->unsignedBigInteger('floor_id'); // Assuming 'id' is an unsigned big integer
            $table->foreign('floor_id')->references('id')->on('floor_models');

            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_models');
    }
};
