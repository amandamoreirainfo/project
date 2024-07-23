<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipamentoController;


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


Route::get('/', [EquipamentoController::class, 'index'])->name('equipamentos.index');
Route::get('/equipamentos/create', [EquipamentoController::class, 'create'])->name('equipamentos.create');
Route::post('/equipamentos', [EquipamentoController::class, 'store'])->name('equipamentos.store');