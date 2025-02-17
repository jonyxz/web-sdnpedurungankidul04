<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class ProfileSiswaPage extends Component
{
    public $classId;
    
    public function mount($classId = null)
    {
        $this->classId = $classId;
    }

    public function render()
    {
        $students = Student::when($this->classId, function ($query) {
            $query->where('classroom_id', $this->classId);
        })->get();

        return view('livewire.profile-siswa-page', compact('students'));
    }
}
