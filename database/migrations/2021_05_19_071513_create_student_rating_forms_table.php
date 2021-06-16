<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentRatingFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_rating_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_id')->constrained()->onUpdate('cascade');
            $table->integer('commitment_1');
            $table->integer('commitment_2');
            $table->integer('commitment_3');
            $table->integer('commitment_4');
            $table->integer('commitment_5');

            $table->integer('knowledge_of_subject_1');
            $table->integer('knowledge_of_subject_2');
            $table->integer('knowledge_of_subject_3');
            $table->integer('knowledge_of_subject_4');
            $table->integer('knowledge_of_subject_5');

            $table->integer('teaching_for_independent_learning_1');
            $table->integer('teaching_for_independent_learning_2');
            $table->integer('teaching_for_independent_learning_3');
            $table->integer('teaching_for_independent_learning_4');
            $table->integer('teaching_for_independent_learning_5');

            $table->integer('management_of_learning_1');
            $table->integer('management_of_learning_2');
            $table->integer('management_of_learning_3');
            $table->integer('management_of_learning_4');
            $table->integer('management_of_learning_5');

            $table->integer('commitment_total');
            $table->integer('knowledge_of_subject_total');
            $table->integer('teaching_for_independent_learning_total');
            $table->integer('management_of_learning_total');
            $table->integer('total');
            $table->longText('comments')->nullable();
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
        Schema::dropIfExists('student_rating_forms');
    }
}
