<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('spe_id')->constrained();
            $table->foreignId('semester_id')->constrained();
            $table->foreignId('school_year_id')->constrained();
            $table->integer('peer_evaluation_result')->nullable();
            $table->integer('student_evaluation_result')->nullable();
            $table->integer('supervisor')->nullable();
            $table->integer('ipcr')->nullable();
            $table->integer('total')->nullable();
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
        Schema::dropIfExists('results');
    }
}
