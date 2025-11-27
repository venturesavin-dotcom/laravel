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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_code')->unique(); // Unique student identification code
            $table->string('first_name'); // Student first name
            $table->string('last_name'); // Student last name
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable(); // Male/Female/Other
            $table->date('dob')->nullable(); // Date of birth
            $table->string('email')->unique(); // Student email
            $table->string('phone')->nullable(); // Contact number
            $table->text('address')->nullable(); // Full home address
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
