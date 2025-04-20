<?php

namespace App\Livewire\Partials;

use Livewire\Component;
use App\Models\Categories;
class Header extends Component
{
    public $Categories;
    public $CategoriesAll;
    public function mount()
    {
        // $this->slug = $slug;
        $this->Categories = Categories::orderBy('id', 'desc')->take(3)->get();
        $this->CategoriesAll = Categories::orderBy('id', 'desc')->get();
    }
    public function render()
    {
        return view('livewire.partials.header',
        [
            'Categories' => $this->Categories,
            'CategoriesAll' => $this->CategoriesAll,
        ]);
    }
}
