<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gallery;

class FotoDetailPage extends Component
{
    public $gallery;

    public function mount($id)
    {
        $this->gallery = Gallery::findOrFail(intval($id));
    }
    
    public function render()
    {
        return view('livewire.foto-detail-page')
            ->with('gallery', $this->gallery);
    }
}
