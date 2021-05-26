<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained();
            $table->bigInteger('id_number');
            $table->string('name');
            $table->string('email')->unique();
            $table->foreignId('year_and_section_id')->nullable()->constrained();
            $table->foreignId('course_name_id')->nullable()->constrained();
            $table->foreignId('college_id')->nullable()->constrained();
            $table->foreignId('user_status_id')->nullable()->constrained();
            $table->string('password');
            $table->rememberToken();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('users');
    }
}
