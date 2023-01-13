<?php

use App\Http\Controllers\AlunosController;
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
    return redirect('/alunos');
});

Route::controller(AlunosController::class)->group(function() {

    Route::get('/alunos', 'index')->name('alunos.index');
    Route::get('/alunos/criar', 'create')->name('alunos.create');
    Route::post('/alunos/salvar', 'store')->name('alunos.store');
    Route::get('/alunos/editar/{id}', 'edit');
    Route::post('/alunos/excluir/{id}', 'destroy');
    Route::post('/alunos/update/{id}', 'update');

});

