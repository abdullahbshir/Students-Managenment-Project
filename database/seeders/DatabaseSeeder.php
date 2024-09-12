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
            'mobile' => '1234567890',
        ]);

        // Add more dummy records as needed
    }
}
