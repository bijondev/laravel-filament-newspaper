<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\Details;
use App\Livewire\CategoryPage;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-cache', function () {
   Artisan::call('cache:clear');
   Artisan::call('route:clear');
   Artisan::call('view:clear');
   Artisan::call('config:clear');

   dd("Cache cleared successfully") ;
});
Route::get('/', HomePage::class);

Route::get('/{slug}', Details::class)->name('post.details');
Route::get('/category/{slug}', CategoryPage::class)->name('category.page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
