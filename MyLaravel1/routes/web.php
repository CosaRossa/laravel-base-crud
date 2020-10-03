<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
}) -> name('home');

Route::get('/paganti', 'PaganteController@index') -> name('paganti-index');

Route::get('/ospiti', 'OspiteController@index') -> name('ospiti-index');

Route::get('/pagamenti', 'PagamentoController@index') -> name('pagamenti-index');
Route::get('/pagamenti/{id}', 'PagamentoController@show') -> name('pagamenti-show');
Route::get('/pagamenti/destroy/{id}', 'PagamentoController@destroy') -> name('pagamenti-destroy');
Route::get('/pagamenti/edit/{id}', 'PagamentoController@edit') -> name('pagamenti-edit');
Route::post('/pagamenti/update/{id}', 'PagamentoController@update') -> name('pagamenti-update');
