<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KelasDetailPage extends Component
{
    public $kelasId;

    public function mount($id)
    {
        $this->kelasId = $id;
    }

    public function render()
    {
        return view('livewire.kelas-detail-page', data: [
            'kelasId' => $this->kelasId,
        ]
    );
    }
}
