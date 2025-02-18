<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class AnnouncementPage extends Component
{
    public function render()
    {
        return view('livewire.announcement-page', [
            'announcements' => Announcement::latest('published_at')->get(),
        ]);
    }
}