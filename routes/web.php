<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Models\News;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'welcome'])->name('beranda');

Route::get('/#beranda', [PageController::class, 'beranda'])->name('beranda-beranda');

Route::get('/#tentang-kami', [PageController::class, 'tentang_kami'])->name('beranda-tentang-kami');

Route::get('/#layanan-kami', [PageController::class, 'layanan_kami'])->name('beranda-layanan-kami');

Route::get('/#tim-kami', [PageController::class, 'tim_kami'])->name('beranda-tim-kami');

Route::get('/#artikel', [PageController::class, 'artikel'])->name('beranda-artikel');

Route::get('/#kontak', [PageController::class, 'kontak'])->name('beranda-kontak');

Route::get('/layanan-kami', [PageController::class, 'layananKami'])->name('layanan-kami');

Route::get('/tim-kami', [PageController::class, 'timKami'])->name('tim-kami');

Route::get('/artikel/{id}', [PageController::class, 'artikelById'])->name('artikel');

Route::post('/contact', [EmailController::class, 'contact'])->name('contact');

Route::post('/store-email', [EmailController::class, 'storeEmail'])->name('storeEmail');

Route::middleware('auth')->group(function () {

    Route::middleware('isAdmin')->group(function(){

        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        Route::prefix('/news')->group(function(){
            Route::get('/views', [NewsController::class, 'viewsNews'])->name('viewsNews');
            Route::get('/view/{id}', [NewsController::class, 'viewNewsById'])->name('viewNewsById');

            Route::get('/create', [NewsController::class, 'createNews'])->name('createNews');
            Route::post('/store', [NewsController::class, 'storeNews'])->name('storeNews');

            Route::get('/edit/{id}', [NewsController::class, 'editNews'])->name('editNews');
            Route::patch('/update/{id}', [NewsController::class, 'updateNews'])->name('updateNews');

            Route::delete('/delete/{id}', [NewsController::class, 'deleteNews'])->name('deleteNews');
        });

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

});

require __DIR__.'/auth.php';
