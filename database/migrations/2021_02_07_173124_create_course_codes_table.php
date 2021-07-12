<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_codes', function (Blueprint $table) {
            $table->id();
            $table->string('course_code');
            $table->foreignId('instructor_id')->constrained();
            $table->foreignId('course_id')->constrained();
            $table->foreignId('year_and_section_id')->constrained();
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
        Schema::dropIfExists('course_codes');
    }
}
