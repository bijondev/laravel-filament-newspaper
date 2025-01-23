<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;

class CategoryPage extends Component
{
    public $slug;
    public $category;
    public $post;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->category = Category::where('slug', $slug)->firstOrFail();
        //$this->post = Post::where('slug', $slug)->all();
    }


    public function render()
    {
        $posts = $this->category->posts()
            ->where('status', 'published') // Optional: Only fetch published posts
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('livewire.category', [
            'posts' => $posts,
        ]);
    }
}