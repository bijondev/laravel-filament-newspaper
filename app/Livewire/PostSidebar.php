<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categories;
use App\Models\Post;
class PostSidebar extends Component
{

    // public $slug;
    public $Categories;
    public $recent;

    public function mount()
    {
        // $this->slug = $slug;
        $this->Categories = Categories::orderBy('id', 'desc')->get();
        $this->recent = Post::latest()->take(10)->get();
    }


    public function render()
    {
        return view('livewire.post-sidebar',
        [
            'Categories' => $this->Categories,
            'recents' => $this->recent,
        ]);
    }
}