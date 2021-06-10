<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYearAndSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('year_and_sections', function (Blueprint $table) {
            $table->id();
            $table->string('year_and_section');
            $table->foreignId('instructor_id')->constrained();
            $table->foreignId('course_id')->constrained();
            // $table->foreignId('course_code_id')->constrained();
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
        Schema::dropIfExists('year_and_sections');
    }
}
