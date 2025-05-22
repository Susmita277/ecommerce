<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Home;
use App\Livewire\Allproduct;
use App\Livewire\Contact;
use App\Livewire\ProductDetailPage;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

// Route::get('/',Home::class)->name('home');
Route::get('/', Home::class)->name('home');
Route::get('/products',Allproduct::class)->name('products');
Route::get('/contacts',Contact::class)->name('contacts');
Route::get('/products/{slug}',ProductDetailPage::class);

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
