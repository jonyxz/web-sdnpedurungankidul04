<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gallery;

class FotoPage extends Component
{
    public $galleries;

    public function mount()
    {
        $this->galleries = Gallery::all();
    }

    public function render()
    {
        return view('livewire.foto-page', [
            'galleries' => $this->galleries,
        ]);
    }
}