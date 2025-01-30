<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class NewsPage extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = Post::latest()->get();
    }

    public function render()
    {
        return view('livewire.news-page');
    }
}