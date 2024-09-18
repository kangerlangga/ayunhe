<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublikController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublikController::class, 'home'])->name('home.publik');
Route::get('/about', [PublikController::class, 'about'])->name('about.publik');
Route::get('/collection', [PublikController::class, 'collection'])->name('collection.publik');
Route::get('/blog', [PublikController::class, 'blog'])->name('blog.publik');

Route::get('/ekstra', [PublikController::class, 'ekstra'])->name('ekstra.publik');
Route::get('/galeri', [PublikController::class, 'galeri'])->name('galeri.publik');
Route::get('/artikel', [PublikController::class, 'artikel'])->name('artikel.publik');
Route::get('/artikel/detail/{id}', [ArtikelController::class, 'show'])->name('artikel.detail');
Route::get('/berita', [PublikController::class, 'berita'])->name('berita.publik');
Route::get('/berita/detail/{id}', [BeritaController::class, 'show'])->name('berita.detail');
Route::get('/kontak', [PublikController::class, 'kontak'])->name('kontak.publik');

// Rute Admin
// Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dash');
    Route::get('/admin/profil/edit', [AdminController::class, 'editProf'])->name('prof.edit');
    Route::post('/admin/profil/updateProfil', [AdminController::class, 'updateProf'])->name('prof.update');
    Route::get('/admin/profil/editSandi', [AdminController::class, 'editPass'])->name('prof.edit.pass');
    Route::post('/admin/profil/updateSandi', [AdminController::class, 'updatePass'])->name('prof.update.pass');

// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
