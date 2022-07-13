<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/produk', 
[App\Http\Controllers\ProdukController::class, 'index']);

Route::get('/produk/create', 
[App\Http\Controllers\ProdukController::class, 'create']);
Route::post('/produk', 
[App\Http\Controllers\ProdukController::class, 'store']);
Route::get('/produk/{id}/edit', 
[App\Http\Controllers\ProdukController::class, 'edit']);
Route::patch('/produk/{id}', 
[App\Http\Controllers\ProdukController::class, 'update']);


require __DIR__.'/auth.php';
