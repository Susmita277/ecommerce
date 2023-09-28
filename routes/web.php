<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\CategoryController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('index', function () {
//     return view('frontend.index');
// });


// Route::get('contact', function () {
//     return view('frontend.contactpage'); productlist
// });

// Route::get('/admin', function () {
//     return view('backend.app');
// });


Route::get('/dashboard',[BackendController::class,'index'])->name('dashboard');


Route::controller(ProductController::class)->group(function () {
Route::get('/product','index')->name('product.index');
Route::get('/product/create','create')->name('product.create');
Route::post('/product/create','store');
Route::get('/product/{id}/edit','edit')->name('product.update');
Route::post('/product/{id}/edit','update');
Route::delete('/product/{id}/delete','delete')->name('product.delete');
});

Route::controller(AboutusController::class)->group(function () {
    Route::get('/aboutus','index')->name('aboutus.index');
    Route::get('/aboutus/create','create')->name('aboutus.create');
    Route::post('/aboutus/create','store');
    Route::get('/aboutus/{id}/edit','edit')->name('aboutus.update');
    Route::post('/aboutus/{id}/edit','update');
    Route::delete('/aboutus/{id}/delete','delete')->name('aboutus.delete');
});

Route::controller(ContactController::class)->group(function () {
    Route::post('/contactform','frontend_index')->name('contactform');
    Route::get('/contact/contactlist','index')->name('contactform.index');
    Route::post('/contact/contactlist','store');
    Route::get('/contactform/{id}/edit','edit')->name('contactform.update');
    Route::post('/contactform/{id}/edit','update');
    Route::delete('/contactform/{id}/delete','delete')->name('contactform.delete');
    // Route::get('/contactform/search','search')->name('contactform.search');
});


  Route::prefix('products')->group(function () {
  Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
  Route::post('/category',[CategoryController::class,'store']);
});

Route::controller(ProjectController::class)->group(function () {
    Route::get('/home','index')->name('home');
    Route::get('/aboutpages','aboutus')->name('aboutpages');
    Route::get('/form','form')->name('form');
    Route::post('/form','form_submission');
});




Route::get('/staff',[StaffController::class,'index'])->name('staff.index');
Route::post('/staff',[StaffController::class,'store']);
// Route::post('/staff',[StaffController::class,'staff']);
Route::get('/productlist',[BackendController::class,'productlist'])->name('productlist');
Route::get('/Listingproduct',[BackendController::class,'Listingproduct'])->name('Listingproduct');
Route::get('/banner',[BannerController::class,'create']);





