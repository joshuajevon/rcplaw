<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
})->name('beranda');

Route::get('/layanan-kami', function () {
    return view('layanan-kami');
})->name('layanan-kami');

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang-kami');

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
