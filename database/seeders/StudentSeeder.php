<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Support\Facades\Storage;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            ['name' => 'Abigail', 'classroom_id' => 1, 'photo' => ''],
            ['name' => 'Bagus', 'classroom_id' => 1, 'photo' => ''],
            ['name' => 'Catur', 'classroom_id' => 1, 'photo' => ''],
            ['name' => 'David', 'classroom_id' => 1, 'photo' => ''],
            ['name' => 'Ega', 'classroom_id' => 1, 'photo' => ''],
            ['name' => 'Fajar', 'classroom_id' => 1, 'photo' => ''],

            ['name' => 'Abigail', 'classroom_id' => 2, 'photo' => ''],
            ['name' => 'Bagus', 'classroom_id' => 2, 'photo' => ''],
            ['name' => 'Catur', 'classroom_id' => 2, 'photo' => ''],
            ['name' => 'David', 'classroom_id' => 3, 'photo' => ''],
            ['name' => 'Ega', 'classroom_id' => 3, 'photo' => ''],
            ['name' => 'Fajar', 'classroom_id' => 3, 'photo' => ''],

            ['name' => 'Abigail', 'classroom_id' => 4, 'photo' => ''],
            ['name' => 'Bagus', 'classroom_id' => 4, 'photo' => ''],
            ['name' => 'Catur', 'classroom_id' => 4, 'photo' => ''],
            ['name' => 'David', 'classroom_id' => 5, 'photo' => ''],
            ['name' => 'Ega', 'classroom_id' => 5, 'photo' => ''],
            ['name' => 'Fajar', 'classroom_id' => 6, 'photo' => ''],

        ];

        foreach ($students as $studentData) {
            $classroom = Classroom::find($studentData['classroom_id']);
            
            if ($classroom) {
                Student::create([
                    'name' => $studentData['name'],
                    'classroom_id' => $studentData['classroom_id'],
                    'class' => $classroom->name,
                    'photo' => $studentData['photo'],
                ]);
            }
        }
    }
}
