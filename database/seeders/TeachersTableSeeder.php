<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeachersTableSeeder extends Seeder
{
    public function run()
    {
        Teacher::create([
            'name' => 'John Doe',
            'address' => '123 Main St',
            'mobile' => '555-555-5555',
        ]);

        Teacher::create([
            'name' => 'Jane Doe',
            'address' => '456 Main St',
            'mobile' => '555-555-5556',
        ]);
    }
}
