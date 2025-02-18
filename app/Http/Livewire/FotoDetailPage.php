<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gallery;

class FotoDetailPage extends Component
{
    public $galleryId;
    public $gallery;

    public function mount($id)
    {
        $this->galleryId = $id;
        $this->gallery = Gallery::findOrFail($id);
    }
    
    public function render()
    {
        return view('livewire.foto-detail-page', ['gallery' => $this->gallery]);
    }
}
