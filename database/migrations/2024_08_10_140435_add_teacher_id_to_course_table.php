<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTeacherIdToCourseTable extends Migration
{
    public function up()
    {
        Schema::table('course', function (Blueprint $table) {
            $table->unsignedBigInteger('teacher_id')->nullable()->change();
        });
        
    }

    public function down()
    {
        Schema::table('course', function (Blueprint $table) {
            $table->dropColumn('teacher_id');
        });
    }
}
