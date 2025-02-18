<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post; 

class NewsDetailPage extends Component
{
    public $newsId;
    public $news;

    public function mount($id)
    {
        $this->newsId = $id;
        $this->news = Post::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.news-detail-page');
    }
}