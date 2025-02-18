<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class NewsPage extends Component
{
    public function render()
    {
        return view('livewire.news-page', [
            'posts' => Post::latest('published_at')->get(),
        ]);
    }
}