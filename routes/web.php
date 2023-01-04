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


Route::resource('/alunos', AlunosController::class);

// Route::get('/alunos', [AlunosController::class, 'index']);
// Route::get('/alunos/criar', [AlunosController::class, 'create']);
// Route::post('/alunos/salvar', [AlunosController::class, 'store']);
// Route::get('/alunos/editar/', [AlunosController::class, 'update']);
// Route::post('/alunos/excluir', [AlunosController::class, 'delete']);


