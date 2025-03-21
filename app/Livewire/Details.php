<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class Details extends Component
{
    public $slug;
    public $post;

    public function mount($slug)
    {
        $this->slug = $slug;

        $this->post = Post::where('slug', $slug)->firstOrFail();
        $this->post->increment('view');
    }

    public function render()
    {
        return view('livewire.details', [
            'post' => $this->post, // Pass the blog details to the view
        ]);
    }

}
