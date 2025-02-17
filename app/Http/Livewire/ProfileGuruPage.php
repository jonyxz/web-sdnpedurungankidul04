<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Teacher;

class ProfileGuruPage extends Component
{
    public $teachers;

    public function mount()
    {
        $this->teachers = Teacher::with('classroom')->get();
    }

    public function render()
    {
        return view('livewire.profile-guru-page', [
            'teachers' => $this->teachers,
        ]);
    }
}
