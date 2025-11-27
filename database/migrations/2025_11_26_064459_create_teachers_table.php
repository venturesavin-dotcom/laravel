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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('teacher_code')->unique(); // Unique teacher identification code
            $table->string('first_name'); // Teacher first name
            $table->string('last_name'); // Teacher last name
            $table->string('email')->unique(); // Teacher email address
            $table->string('phone')->nullable(); // Teacher contact number
            $table->string('qualification'); // Academic qualification
            $table->text('address')->nullable(); // Home address
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};