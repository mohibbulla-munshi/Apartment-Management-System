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
        Schema::create('building_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable(false);
            $table->string('building_name')->nullable(false);
            $table->string('division')->nullable(false);
            $table->string('district')->nullable(false);
            $table->string('city_corporation')->nullable(true);
            $table->string('upazilla')->nullable(true);
            $table->string('post_code')->nullable(false);
            $table->string('area')->nullable(false);
            $table->string('building_no')->nullable(false);
            $table->string('building_type')->nullable(false);
            $table->string('buliding_floors')->nullable(true);
            $table->string('buliding_units')->nullable(true);
            $table->string('building_owners')->nullable(false);
            $table->text('additional_info')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('building_details');
    }
};
