<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::all();

        //return view('livewire.show-posts', compact('posts'));

        return view('livewire.show-posts', [
            'posts' => Post::paginate(10),
        ]);
    }
}
