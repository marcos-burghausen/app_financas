<?php

use App\Http\Controllers\DespesasController;
use App\Http\Controllers\ReceitasController;
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
    return view('home');
});

// Route::get('/despesas/adicionar', function () {
//     return view('despesas.despesa');
// });

Route::get('/receitas', [ReceitasControllerController::class, 'listarReceitas']);

Route::controller(DespesasController::class)->group(function() {
    Route::get('/despesas', 'listarDespesas')->name('despesas');
    Route::get('/despesas/adicionar', 'adicionarDespesa')->name('adicionarDespesa');
});
