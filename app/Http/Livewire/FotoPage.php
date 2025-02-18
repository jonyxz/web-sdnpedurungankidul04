<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gallery;

class FotoPage extends Component
{
    public $galleries;

    public function mount()
    {
        $this->galleries = Gallery::with('images')->get();
    }

    public function render()
    {
        return view('livewire.foto-page', ['galleries' => $this->galleries]);
    }
}