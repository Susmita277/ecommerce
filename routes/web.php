<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Home;
use App\Livewire\Allproduct;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Logout;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Checkoutpage;
use App\Livewire\Contact;
use App\Livewire\Admin;
use App\Livewire\ProductDetailPage;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

// Route::get('/',Home::class)->name('home');
Route::get('/', Home::class)->name('home');
Route::get('/products', Allproduct::class)->name('products');
Route::get('/contacts', Contact::class)->name('contacts');
Route::get('/products/{slug}', ProductDetailPage::class);

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
    Route::get('forgot-password', ForgotPassword::class)->name('password.request');
    Route::get('reset-password/{token}', ResetPassword::class)->name('password.reset');
}); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function (){
Route::get('/logout',function (){
    auth()->logout();
    return redirect()->to('/');
});
Route::get('/checkout', Checkoutpage::class)->name('checkout');
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';
