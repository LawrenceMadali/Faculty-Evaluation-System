<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeerQuestionairFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peer_questionair_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_enabled')->default(false);
            $table->string('A_Question_1');
            $table->string('A_Question_2');
            $table->string('A_Question_3');
            $table->string('A_Question_4');
            $table->string('A_Question_5');

            $table->string('B_Question_1');
            $table->string('B_Question_2');
            $table->string('B_Question_3');
            $table->string('B_Question_4');
            $table->string('B_Question_5');

            $table->string('C_Question_1');
            $table->string('C_Question_2');
            $table->string('C_Question_3');
            $table->string('C_Question_4');
            $table->string('C_Question_5');

            $table->string('D_Question_1');
            $table->string('D_Question_2');
            $table->string('D_Question_3');
            $table->string('D_Question_4');
            $table->string('D_Question_5');

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
        Schema::dropIfExists('peer_questionair_forms');
    }
}
