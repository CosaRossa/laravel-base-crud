<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PaganteController@index') -> name('index');

Route::get('/ospiti', 'OspiteController@index') -> name('indexOsp');
