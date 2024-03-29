<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('id_number');
            $table->foreignId('college_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('semester_id')->constrained();
            $table->foreignId('school_year_id')->constrained();
            $table->boolean('is_active')->default(true);
            $table->integer('evaluatee');
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
        Schema::dropIfExists('spes');
    }
}
