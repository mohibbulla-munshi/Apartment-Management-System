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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('contact');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('nid');
            $table->string('designation');
            $table->date('joining_date');
            $table->date('ending_date')->nullable();
            $table->decimal('salary', 10, 2);
            $table->string('status');
            $table->string('employee_photo')->nullable(); // Assuming the employee photo is stored as a file path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
