<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;

class HomePage extends Component
{
    public function render()
    {
        $stiky = Post::where('stiky', 1)->first();
        $recent = Post::where('stiky', 0)->latest()->take(3)->get();
        $latest = Post::latest()->take(10)->get();
        $stikysecond = Post::where('stiky', 1)->where('id', '!=', $stiky->id)->take(4)->latest()->get();
        $topPosts = Post::where('top', 1)->latest()->take(10)->get();
        $fPosts = Post::where('features', 1)->latest()->take(10)->get();
        $Categories = Category::take(5)->get();
        //dd($posts->title);
        //$categories = Category::where('is_active', 1)->get();
        return view('livewire.home-page',[
            'stiky'=>$stiky,
            'recents'=>$recent,
            'stikyseconds'=>$stikysecond,
            'topPosts'=>$topPosts,
            'Categories'=>$Categories,
            'fPosts'=>$fPosts,
            'latests'=>$latest,
            //'categories' => $categories
        ]);
    }
}