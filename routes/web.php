<?php

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
    return view('private.home.inicio');
});

Route::get('/login','LoginController@getLogin')->name('public.login.inicio'); 

/*ROTAS DOS CADASTROS AUXILIARES TIPO MANUAL*/
Route::get('/CadastroAuxiliar', 'cadastroAuxiliarController@getCadastroAux')->name('tela_cadastros');
Route::get('/CadastroAuxiliar/Listar', 'cadastroAuxiliarController@index')->name('listar_cadastros');
Route::post('/CadastroAuxiliar/inserir', 'cadastroAuxiliarController@store')->name('salvar_cadastros');
Route::put('/CadastroAuxiliar/alterar/{id}', 'cadastroAuxiliarController@update')->name('alterar_cadastros');
Route::delete('/CadastroAuxiliar/deletar/{id}', 'cadastroAuxiliarController@destroy')->name('apagar_cadastros');
/*FIM DAS ROTAS DE CADASTROS AUXILIARES TIPO MANUAL*/