<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('visualizar.auth_login');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/novo_usuario', function(){
    return view('cadastros.novo_usuario');
});
Route::get('/nova_unidade', function(){
    return view('cadastros.nova_unidade');
});

Route::get('/novo_medicamento', function(){
    return view('cadastros.novo_medicamento');
});

Route::get('/novo_lote', function(){
    return view('cadastros.novo_lote');
});

Route::get('/ver_usuarios', function(){
    return view('visualizar.ver_usuarios');
});

Route::get('/ver_unidades', function(){
    return view('visualizar.ver_unidades    ');
});

Route::get('/prescricao_simples', function(){
    return view('entradas.prescricao_simples');
});

Route::get('/relatorio_medico', function(){
    return view('entradas.relatorio_medico');
});

Route::get('/prescricao_controle_especial', function(){
    return view('entradas.prescricao_controle_especial');
});
Route::get('/prescricao_antimicrobianos', function(){
    return view('entradas.prescricao_antimicrobianos');
});

Route::get('/prescricao_atestado_medico', function(){
    return view('entradas.prescricao_atestado_medico');
});

Route::get('/perfil_usuario', function(){
    return view('profile.perfil_usuario');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
