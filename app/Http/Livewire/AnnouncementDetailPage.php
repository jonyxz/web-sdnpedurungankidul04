<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class AnnouncementDetailPage extends Component
{
    public $announcementId;
    public $announcement;

    public function mount($id)
    {
        $this->announcementId = $id;
        $this->announcement = Announcement::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.announcement-detail-page');
    }
}