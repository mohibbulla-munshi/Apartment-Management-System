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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('skype')->nullable();
            $table->string('fax')->nullable();
            $table->string('opening_day')->nullable();
            $table->string('opening_time')->nullable();
            $table->string('address');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linked_in')->nullable();
            $table->string('youtube')->nullable();
            $table->string('copy_right')->nullable();
            $table->string('key_note')->nullable();
            $table->string('status')->nullable('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
