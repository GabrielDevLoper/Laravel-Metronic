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
Route::group(['prefix'=> 'auxiliares'], function(){
    Route::group(['prefix'=> 'tipoManual'], function(){
        Route::get('/cadastroAuxiliar', 'cadastroAuxiliarController@getCadastroAux')->name('tela_cadastros');
        Route::get('/listar', 'cadastroAuxiliarController@index')->name('listar_cadastros');
        Route::post('/salvar', 'cadastroAuxiliarController@store')->name('salvar_cadastros');
        Route::put('/alterar/{id}', 'cadastroAuxiliarController@update')->name('alterar_cadastros');
        Route::get('/deletar/{id}', 'cadastroAuxiliarController@destroy')->name('apagar_cadastros');
    });
});
/*FIM DAS ROTAS DE CADASTROS AUXILIARES TIPO MANUAL*/


/*ROTAS DOS CADASTROS MANUAIS*/
Route::group(['prefix' => 'manual'], function(){
    Route::get('/CadastroManual', 'cadastroManualController@getCadastroManual')->name('tela_cadastroManual');
    Route::post('/salvar', 'cadastroManualController@store')->name('salvar_cadastroManual');
    Route::get('/listar', 'cadastroManualController@getListarCadastroManual')->name('tela_listarManuais');
    Route::delete('/deletar/{id}', 'cadastroManualController@destroy')->name('apagar_cadastroManual');
    Route::get('/alterar', 'cadastroManualController@getAlterarCadastroManual')->name('tela_alteraManual');
});
/*FIM DAS ROTAS DE CADASTROS MANUAIS*/