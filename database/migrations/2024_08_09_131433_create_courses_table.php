<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTable extends Migration
{
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('subject');
            $table->unsignedBigInteger('teacher_id');
            $table->string('class');
            $table->timestamps();

            $table->foreign('teacher_id')->references('id')->on('teachers');
        });
    }

    public function down()
    {
        Schema::dropIfExists('course');
    }
}
