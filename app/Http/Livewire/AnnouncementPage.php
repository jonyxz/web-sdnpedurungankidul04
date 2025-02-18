<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class AnnouncementPage extends Component
{
    public $announcements;

    public function mount()
    {
        $this->announcements = Announcement::all();
    }

    public function render()
    {
        return view('livewire.announcement-page', ['announcements' => $this->announcements]);
    }
}