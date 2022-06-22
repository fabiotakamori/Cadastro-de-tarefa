<?php

use Illuminate\Support\Facades\Route;

/*Importando o Controller da rota*/
use App\Http\Controllers\AllTarefaController;
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

/*o index da rota, indica o método*/
Route::get('/todasTarefas',[AllTarefaController::class, "index"]);