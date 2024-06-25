<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LivrosController;
use Illuminate\Support\Facades\Route;
use App\Models\Livro;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [LivrosController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('editar/{id}', function ($id) {
	$livro = Livro::where("id", $id)->first();

        return view("editar-livros", ['livro' => $livro]);
    })->name("editar-livros");

    Route::post('editar/{id}', [LivrosController::class, 'editar'])->name("editar-livros");

    Route::get('cadastrar', function () {
        return view("cadastrar-livros");
    })->name("cadastrar-livros");

    Route::post('cadastrar', [LivrosController::class, 'cadastrar'])->name("cadastrar-livros");

    Route::get('deletar/{id}', [LivrosController::class, 'deletar'])->name("deletar-livros");
});

require __DIR__.'/auth.php';
