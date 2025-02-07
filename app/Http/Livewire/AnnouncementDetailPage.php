<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AnnouncementDetailPage extends Component
{
    public $announcementId;

    public function mount($id)
    {
        $this->announcementId = $id;
    }

    public function render()
    {
        return view('livewire.announcement-detail-page', [
            'announcementId' => $this->announcementId,
        ]);
    }
}