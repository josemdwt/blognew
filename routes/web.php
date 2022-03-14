<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::controller(PostController::class)->prefix('noticias')->group(function () {
    Route::get('/', 'index');
    Route::get('/categorias', 'categories');
    Route::get('/paises', 'countries');
    Route::get('/{id}', 'show')->whereNumber('id');

});

Route::controller(CategoryController::class)->prefix('categorias')->group(function () {
    Route::get('/{id}', 'show')->whereNumber('id');

});

Route::middleware(['auth:sanctum', 'verified'])->prefix('/admin')->group(function () {
    Route::get('/categorias/lista', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categorias/crear', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categorias/crear', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categorias/editar/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categorias/editar/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categorias/borrar/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');
});
