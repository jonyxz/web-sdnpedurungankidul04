<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Classroom;

class ProfileSiswaPage extends Component
{
    public function render()
    {
        $classrooms = Classroom::with('students')->get();
        
        return view('livewire.profile-siswa-page', compact('classrooms'));
    }
}
