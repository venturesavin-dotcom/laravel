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
        Schema::create('exams', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('exam_name'); // Name of the exam (Mid-term, Final, etc.)
            $table->foreignId('course_id')->constrained()->onDelete('cascade'); // Foreign key → courses.id
            $table->integer('exam_year'); // Academic year
            $table->integer('exam_term'); // Term number (1st, 2nd, 3rd)
            $table->date('start_date'); // Exam start date
            $table->date('end_date'); // Exam end date
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};