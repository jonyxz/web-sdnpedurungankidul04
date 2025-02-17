<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use App\Models\Classroom;

class KelasDetailPage extends Component
{
    public $kelasId;

    public function mount($id)
    {
        $this->kelasId = $id;
    }

    public function render()
    {
        $students = Student::where('classroom_id', $this->kelasId)->get();
        $classroom = Classroom::find($this->kelasId);
        
        return view('livewire.kelas-detail-page', compact('students', 'classroom'));
    }
}
