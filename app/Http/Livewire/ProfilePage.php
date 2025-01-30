<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Profile;

class ProfilePage extends Component
{
    public $profile;

    public function mount()
    {
        $this->profile = Profile::first();
    }

    public function render()
    {
        return view('livewire.profile-page');
    }
}
