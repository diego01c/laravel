<?php

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
});

Route::get('/app', function () {
    return view('app', ['nombre'=>"Juan Carlos"]);
});

Route::get('/home', function () {
    return view('home', ['nombre'=>"Juan Carlos"]);
});

Route::get('/about', function () {
    return view('about', ['nombre'=>"Juan Carlos"]);
});

Route::get('/pdf', [App\Http\Controllers\ProductosController::class, 'getPDF'])->name('produtos.pdf');

Route::get('/productos', [App\Http\Controllers\ProductosController::class, 'index']);

Route::get('/productos/mostrar', [App\Http\Controllers\ProductosController::class, 'mostrar']);

Route::get('/productos/show', [App\Http\Controllers\ProductosController::class, 'show']);

Route::get('/productos/crear', [App\Http\Controllers\ProductosController::class, 'crear']);

Route::post('/productos/dataForm', [App\Http\Controllers\ProductosController::class, 'dataForm'])->name('produtos.formdata');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


