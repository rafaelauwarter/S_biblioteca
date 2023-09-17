<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LivrosController,
    LeitorController,
    EmprestimoController
};

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

Route::delete('/emprestimos/{id}', [EmprestimoController::class, 'delete'])->name('emprestimos.delete');
Route::get('/emprestimos/{id}/edit', [EmprestimoController::class, 'edit'])->name('emprestimos.edit');
Route::get('/emprestimos/create/{id}', [EmprestimoController::class, 'create'])->name('emprestimos.create');
// Route::get('/emprestimos/{id}', [EmprestimoController::class, 'show'])->name('emprestimos.show');
Route::get('/emprestimos/{id}', [EmprestimoController::class, 'update'])->name('emprestimos.update');
Route::post('/emprestimos', [EmprestimoController::class, 'store'])->name('emprestimos.store');
Route::get('/emprestimos', [EmprestimoController::class, 'index'])->name('emprestimos.index');

Route::delete('/leitores/{id}', [LeitorController::class, 'delete'])->name('leitores.delete');
Route::put('/leitores/{id}', [LeitorController::class, 'update'])->name('leitores.update');
Route::get('/leitores/{id}/edit', [LeitorController::class, 'edit'])->name('leitores.edit');
Route::get('/leitores/create', [LeitorController::class, 'create'])->name('leitores.create');
Route::get('/leitores/{id}', [LeitorController::class, 'show'])->name('leitores.show');
Route::post('/leitores', [LeitorController::class, 'store'])->name('leitores.store');
Route::get('/leitores', [LeitorController::class, 'index'])->name('leitores.index');

Route::delete('/livros/{id}', [LivrosController::class, 'delete'])->name('livros.delete');
Route::put('/livros/{id}', [LivrosController::class, 'update'])->name('livros.update');
Route::get('/livros/{id}/edit', [LivrosController::class, 'edit'])->name('livros.edit');
Route::get('/livros/create', [LivrosController::class, 'create'])->name('livros.create');
Route::get('/livros/{id}', [LivrosController::class, 'show'])->name('livros.show');
Route::post('/livros', [LivrosController::class, 'store'])->name('livros.store');
Route::get('/livros', [LivrosController::class, 'index'])->name('livros.index');

Route::get('/', function () {
    return view('biblioteca/dashboard/dashboard');
})->name('home');
