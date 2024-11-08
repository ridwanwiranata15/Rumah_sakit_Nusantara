<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', function(){
        return 'Assalamualaikum admin';
    })->name('admin.index');
});
Route::group(['prefix' => 'dokter'], function(){
    Route::get('/', function(){
        return 'Assalamualaikum dokter';
    })->name('admin.index');
});
Route::group(['prefix' => 'apoteker'], function(){
    Route::get('/', function(){
        return 'Assalamualaikum apoteker';
    })->name('admin.index');
});