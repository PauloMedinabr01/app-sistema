<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar as rotas web para a sua aplicação. Essas
| rotas são carregadas pelo RouteServiceProvider e todas elas serão atribuídas
| ao grupo de middleware "web". Faça algo incrível!
|
*/

Route::prefix('user')->group(function () {
    Route::get('/index', [UsersController::class, 'index'])->name('user-index');

    Route::get('/create', [UsersController::class, 'create'])->name('user-create');
    Route::post('/', [UsersController::class, 'store'])->name('user-store');

    Route::get('/{id}/edit', [UsersController::class, 'edit'])->where('id', '[0-9]+')->name('user-edit');
    Route::put('/{id}', [UsersController::class, 'update'])->where('id', '[0-9]+')->name('user-update');

    Route::get('/{id}/delete', [UsersController::class, 'confirma'])->where('id', '[0-9]+')->name('user-delete');
    Route::delete('/{id}', [UsersController::class, 'destroy'])->where('id', '[0-9]+')->name('user-destroy');
});

Route::get('/', [IndexController::class, 'index']);
