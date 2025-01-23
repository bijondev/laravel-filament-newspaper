<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\Details;
use App\Livewire\CategoryPage;

Route::get('/', HomePage::class);

Route::get('/{slug}', Details::class)->name('post.details');
Route::get('/category/{slug}', CategoryPage::class)->name('category.page');