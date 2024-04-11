<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Country\CountryListPage;
use App\Livewire\Product\ProductFormPage;
use App\Livewire\Product\ProductlistPage;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group([
    'prefix' => 'countries',
    'as' => 'country.'
],function(){
    Route::get('/',CountryListPage::class)->name('list');
});

Route::group([
    'prefix' => 'products',
    'as' => 'product.'
],function(){
    Route::get('/',ProductlistPage::class)->name('list');
    Route::get('/create',ProductFormPage::Class)->name('create');
    Route::get('/update/{id}',ProductFormPage::Class)->name('update');
});


