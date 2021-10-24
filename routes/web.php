<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\refeicaoController;
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

Route::get('/refeicoes', function () {
    return view('refeicoes');
});

//Route::get('/adicionar/refeicoes', function () {
//    return view('adicionar-refeicoes');
//});

//Route::post('/adicionar/refeicoes', [App\Http\Controllers\refeicaoController::class, 'cadastrar'])->name('refeicao.cadastrar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//refeicao
Route::get('refeicao/cadastrar', [refeicaoController::class, 'prepararCadastro']);
Route::post('refeicao/cadastrar', [refeicaoController::class, 'cadastrar'])->name('refeicao.criar');

Route::get('sala/cadastrar', [SalaController::class, 'prepararCadastro']);
Route::post('sala/cadastrar', [SalaController::class, 'cadastrar'])->name('sala.criar');