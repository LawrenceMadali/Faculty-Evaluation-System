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
            $table->string('name');
            $table->bigInteger('id_number');
            $table->foreignId('college_id')->constrained();
            $table->foreignId('semester_id')->constrained();
            $table->foreignId('school_year_id')->constrained();
            $table->boolean('is_release')->default(false);
            $table->float('student_evaluation_result');
            $table->float('peer_evaluation_result');
            $table->float('supervisor');
            $table->float('ipcr');
            $table->float('total');
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
