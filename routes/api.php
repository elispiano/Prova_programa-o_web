<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\AgenciaController;
use App\Http\Controllers\ImobiliariaController;
use App\Http\Controllers\TelefoneController;
use App\Http\Controllers\ProprietarioController;
use App\Http\Controllers\ImovelController;
use App\Http\Controllers\TerrenoController;
use App\Http\Controllers\VivendaController;
use App\Http\Controllers\ApartamentoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendaController;

Route::get('agencias', [AgenciaController::class, 'index']);
Route::get('agencias/{id}', [AgenciaController::class, 'show']);
Route::post('agencias', [AgenciaController::class, 'store']);
Route::put('agencias/{id}', [AgenciaController::class, 'update']);
Route::delete('agencias/{id}', [AgenciaController::class, 'destroy']);

Route::get('imobiliarias', [ImobiliariaController::class, 'index']);
Route::get('imobiliarias/{id}', [ImobiliariaController::class, 'show']);
Route::post('imobiliarias', [ImobiliariaController::class, 'store']);
Route::put('imobiliarias/{id}', [ImobiliariaController::class, 'update']);
Route::delete('imobiliarias/{id}', [ImobiliariaController::class, 'destroy']);

Route::get('telefones', [TelefoneController::class, 'index']);
Route::get('telefones/{id}', [TelefoneController::class, 'show']);
Route::post('telefones', [TelefoneController::class, 'store']);
Route::put('telefones/{id}', [TelefoneController::class, 'update']);
Route::delete('telefones/{id}', [TelefoneController::class, 'destroy']);

Route::get('proprietarios', [ProprietarioController::class, 'index']);
Route::get('proprietarios/{id}', [ProprietarioController::class, 'show']);
Route::post('proprietarios', [ProprietarioController::class, 'store']);
Route::put('proprietarios/{id}', [ProprietarioController::class, 'update']);
Route::delete('proprietarios/{id}', [ProprietarioController::class, 'destroy']);

Route::get('imoveis', [ImovelController::class, 'index']);
Route::get('imoveis/{id}', [ImovelController::class, 'show']);
Route::post('imoveis', [ImovelController::class, 'store']);
Route::put('imoveis/{id}', [ImovelController::class, 'update']);
Route::delete('imoveis/{id}', [ImovelController::class, 'destroy']);

Route::get('terrenos', [TerrenoController::class, 'index']);
Route::get('terrenos/{id}', [TerrenoController::class, 'show']);
Route::post('terrenos', [TerrenoController::class, 'store']);
Route::put('terrenos/{id}', [TerrenoController::class, 'update']);
Route::delete('terrenos/{id}', [TerrenoController::class, 'destroy']);

Route::get('vivendas', [VivendaController::class, 'index']);
Route::get('vivendas/{id}', [VivendaController::class, 'show']);
Route::post('vivendas', [VivendaController::class, 'store']);
Route::put('vivendas/{id}', [VivendaController::class, 'update']);
Route::delete('vivendas/{id}', [VivendaController::class, 'destroy']);

Route::get('apartamentos', [ApartamentoController::class, 'index']);
Route::get('apartamentos/{id}', [ApartamentoController::class, 'show']);
Route::post('apartamentos', [ApartamentoController::class, 'store']);
Route::put('apartamentos/{id}', [ApartamentoController::class, 'update']);
Route::delete('apartamentos/{id}', [ApartamentoController::class, 'destroy']);

Route::get('funcionarios', [FuncionarioController::class, 'index']);
Route::get('funcionarios/{id}', [FuncionarioController::class, 'show']);
Route::post('funcionarios', [FuncionarioController::class, 'store']);
Route::put('funcionarios/{id}', [FuncionarioController::class, 'update']);
Route::delete('funcionarios/{id}', [FuncionarioController::class, 'destroy']);

Route::get('clientes', [ClienteController::class, 'index']);
Route::get('clientes/{id}', [ClienteController::class, 'show']);
Route::post('clientes', [ClienteController::class, 'store']);
Route::put('clientes/{id}', [ClienteController::class, 'update']);
Route::delete('clientes/{id}', [ClienteController::class, 'destroy']);

Route::get('vendas', [VendaController::class, 'index']);
Route::get('vendas/{id}', [VendaController::class, 'show']);
Route::post('vendas', [VendaController::class, 'store']);
Route::put('vendas/{id}', [VendaController::class, 'update']);
Route::delete('vendas/{id}', [VendaController::class, 'destroy']);

Route::post('/login', [LoginController::class, 'login']);
