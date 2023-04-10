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
            $table->string('bulding_name')->nullable(false);
            $table->string('divisions')->nullable(false);
            $table->string('sub_districts')->nullable(false);
            $table->string('union_corporations')->nullable(false);
            $table->string('post_code')->nullable(false);
            $table->string('Villages')->nullable(false);
            $table->string('bulding_no')->nullable(false);
            $table->string('bulding_type')->nullable(false);
            $table->string('bulding_floors')->nullable(true);
            $table->string('bulding_Units')->nullable(true);
            $table->string('bulding_owners')->nullable(false);
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
