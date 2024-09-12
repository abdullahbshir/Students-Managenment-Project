<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'subject',
        'teacher_id',
        'class',
    ];

    protected $table = 'courses';
}
