<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('school_year_id')->constrained();
            $table->foreignId('semester_id')->constrained();
            $table->foreignId('instructor_id')->constrained()->onUpdate('cascade');
            $table->foreignId('course_id')->constrained();
            $table->foreignId('year_and_section_id')->constrained();
            $table->foreignId('course_code_id')->constrained();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sses');
    }
}
