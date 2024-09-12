<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // If your table name is different from the plural form of the model name, specify it here
    protected $table = 'courses'; // Ensure this matches the actual table name in your database

    // If you want to specify the primary key (not necessary unless it's not 'id')
    protected $primaryKey = 'id'; // Default is 'id'

    // If your primary key is not auto-incrementing (e.g., UUIDs), set this to false
    public $incrementing = true; // Default is true

    // If your primary key is not an integer, specify its type (e.g., 'string' for UUIDs)
    protected $keyType = 'int'; // Use 'string' if your primary key is a string (like UUID)

    // Define the fillable attributes if you're using mass assignment
    protected $fillable = [
        'subject',
        'teacher_id',
        'class',
    ];

    // If you're using timestamps in your table, set this to true
    public $timestamps = true;

    // Define relationships if needed
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
