<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();

        Student::factory()->create([
            'name' => 'Kian Jearard G. Naquines',
            'email' => 'kjgnaquines@gmail.com',
            'student_id' => '21-65696',
        ]);

        Student::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'student_id' => '21-65697',
        ]);

        Student::factory()->create([
            'name' => 'Jane Doe',
            'email' => 'jane@gmail.com',
            'student_id' => '21-65698',
        ]);
    }
}
