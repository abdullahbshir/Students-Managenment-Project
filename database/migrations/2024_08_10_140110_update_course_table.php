<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCourseTable extends Migration
{
    public function up()
    {
        Schema::table('course', function (Blueprint $table) {
            if (Schema::hasColumn('course', 'teacher')) {
                $table->renameColumn('teacher', 'teacher_id');
            }

            if (!Schema::hasColumn('course', 'teacher_id')) {
                $table->unsignedBigInteger('teacher_id')->nullable();
            }

            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('course', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
            $table->dropColumn('teacher_id');
        });
    }
}
