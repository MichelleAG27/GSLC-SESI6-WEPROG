<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/binatang');
});

Route::get('/binatang', [\App\Http\Controllers\zooController::class, 'binatang']);

Route::get('/staff', [\App\Http\Controllers\zooController::class,'staff']);
