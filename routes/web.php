<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::middleware(['hospital' => 'hospital'], function(){

});
Route::group(['prefix' => '/'], function(){
    Route::group(['prefix' => '/'], function(){
        Route::get('/', function(){return view('admin.dokter');})->name('admin.dokter');
    });
    Route::group(['prefix' => 'apoteker'], function(){
        Route::get('/', function(){return view('admin.apoteker');})->name('admin.apoteker');
    });
    Route::group(['prefix' => 'poli'], function(){
        Route::get('/', function(){return view('admin.poli');})->name('admin.poli');
    });
    Route::group(['prefix' => 'pasien'], function(){
        Route::get('/', function(){return view('admin.pasien');})->name('admin.pasien');
    });
});
Route::group(['prefix' => 'dokter'], function(){
    Route::get('/', function(){
        return view('dokter.index');
    })->name('dokter.index');
});
Route::group(['prefix' => 'apoteker'], function(){
    Route::get('/obat', function(){
        return view('apoteker.obat');
    })->name('apoteker.obat');
    Route::get('/resep', function(){
        return view('apoteker.resep');
    })->name('apoteker.resep');
});

Route::get('login',function () {
    return view('auth.login');
})->name('login');
Route::get('register',function () {
    return view('auth.register');
});
Route::post('post-register', [AuthController::class, 'post_register'])->name('post-register');
Route::post('post-login', [AuthController::class, 'post_login'])->name('post-login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');