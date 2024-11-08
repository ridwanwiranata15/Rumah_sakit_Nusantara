<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'dokter'], function(){
        Route::get('/', function(){return view('admin.dokter');})->name('admin.dokter');
    });
    Route::group(['prefix' => 'apoteker'], function(){
        Route::get('/', function(){return view('admin.apoteker');})->name('admin.apoteker');
    });
    Route::group(['prefix' => 'poli'], function(){
        Route::get('/', function(){return view('admin.poli');})->name('admin.poli');
    });
    Route::group(['prefix' => 'pasien'], function(){
        Route::get('/', function(){return view('admin.pasien');})->name('admin.poli');
    });
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