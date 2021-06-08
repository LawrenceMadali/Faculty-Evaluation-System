<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_number');
            $table->string('name');
            $table->string('email')->unique();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('year_and_section_id')->constrained();
            $table->foreignId('course_code_id')->constrained();
            $table->boolean('is_enrolled')->default(true);
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
        Schema::dropIfExists('students');
    }
}
