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


Route::get('/login', 'LoginController@getLogin')->name('login');
Route::post('/validar', 'LoginController@postLogin')->name('public.login.validar');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('private.home.inicio');
    })->name('inicio.privado');
    /*ROTAS DOS CADASTROS AUXILIARES TIPO MANUAL*/
    Route::group(['prefix' => 'auxiliares'], function () {
        
            Route::get('/cadastroAuxiliar', 'CadastroAuxiliarController@getCadastroAux')->name('tela_cadastros');
            Route::get('/listar', 'CadastroAuxiliarController@index')->name('listar_cadastros');
            Route::post('/salvar', 'CadastroAuxiliarController@store')->name('salvar_cadastros');
            Route::put('/alterar/{id}', 'CadastroAuxiliarController@update')->name('alterar_cadastros');
            Route::get('/deletar/{id}', 'CadastroAuxiliarController@destroy')->name('apagar_cadastros');
    });
    /*FIM DAS ROTAS DE CADASTROS AUXILIARES TIPO MANUAL*/


    /*ROTAS DOS CADASTROS MANUAIS*/
    Route::group(['prefix' => 'manual'], function () {
        Route::get('/CadastroManual', 'CadastroManualController@getCadastroManual')->name('tela_cadastroManual');
        Route::post('/salvar', 'CadastroManualController@store')->name('salvar_cadastroManual');
        Route::get('/listar', 'CadastroManualController@getListarCadastroManual')->name('tela_listarManuais');
        Route::delete('/deletar/{id}', 'CadastroManualController@destroy')->name('apagar_cadastroManual');
        Route::get('/alterar/{id}', 'CadastroManualController@getAlterarCadastroManual')->name('tela_alteraManual');
        Route::post('/alterar/{id}, CadastroManualController@update')->name('atualiza_Manual');
    });
    /*FIM DAS ROTAS DE CADASTROS MANUAIS*/
});
