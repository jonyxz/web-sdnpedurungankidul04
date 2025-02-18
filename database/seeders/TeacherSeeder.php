<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\Classroom;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            ['name' => 'Anam', 'position' => 'Guru Kelas 6', 'classroom_id' => 6],
            ['name' => 'Burhan', 'position' => 'Guru Kelas 5', 'classroom_id' => 5],
            ['name' => 'Catur', 'position' => 'Guru Kelas 4', 'classroom_id' => 4], 
            ['name' => 'Doni', 'position' => 'Guru Kelas 3', 'classroom_id' => 3], 
            ['name' => 'Arga', 'position' => 'Guru Kelas 2', 'classroom_id' => 2], 
            ['name' => 'Lala', 'position' => 'Guru Kelas 1', 'classroom_id' => 1],
            ['name' => 'michella', 'position' => 'Guru Bahasa Inggris'],
            ['name' => 'kitty', 'position' => 'Guru seni Rupa'],
            ['name' => 'Denis', 'position' => 'Guru Pendidikan Jasmani'],
        ];

        foreach ($teachers as $teacherData) {
            $classroom = Classroom::find($teacherData['classroom_id']);
            
            if ($classroom) {
                Teacher::create([
                    'name' => $teacherData['name'],
                    'position' => $teacherData['position'],
                    'classroom_id' => $teacherData['classroom_id'],
                    // 'photo' => $teacherData['photo'],
                ]);
            }
        }
    }
}