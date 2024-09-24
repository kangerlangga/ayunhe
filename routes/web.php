<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublikController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublikController::class, 'home'])->name('home.publik');
Route::get('/about', [PublikController::class, 'about'])->name('about.publik');
Route::get('/collection', [PublikController::class, 'collection'])->name('collection.publik');
Route::get('/blog', [PublikController::class, 'blog'])->name('blog.publik');
Route::get('/blog/detail/{id}', [BlogController::class, 'show'])->name('blog.detail');

// Rute Admin
Route::middleware(['auth', 'verified', CheckAdmin::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dash');
    Route::get('/admin/profil/edit', [AdminController::class, 'editProf'])->name('prof.edit');
    Route::post('/admin/profil/updateProfil', [AdminController::class, 'updateProf'])->name('prof.update');
    Route::get('/admin/profil/editSandi', [AdminController::class, 'editPass'])->name('prof.edit.pass');
    Route::post('/admin/profil/updateSandi', [AdminController::class, 'updatePass'])->name('prof.update.pass');

    Route::get('/admin/home', [HomeSliderController::class, 'index'])->name('home.data');
    Route::get('/admin/home/add', [HomeSliderController::class, 'create'])->name('home.add');
    Route::post('/admin/home/store', [HomeSliderController::class, 'store'])->name('home.store');
    Route::get('/admin/home/edit/{id}', [HomeSliderController::class, 'edit'])->name('home.edit');
    Route::post('/admin/home/update/{id}', [HomeSliderController::class, 'update'])->name('home.update');
    Route::get('/admin/home/delete/{id}', [HomeSliderController::class, 'destroy'])->name('home.delete');

    Route::get('/admin/product', [ProductController::class, 'index'])->name('product.data');
    Route::get('/admin/product/add', [ProductController::class, 'create'])->name('product.add');
    Route::post('/admin/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/admin/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/admin/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
