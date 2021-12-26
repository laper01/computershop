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
    return File::get(public_path() . '/ui/index.html');
});

Route::get('listpenjual', function () {
    return File::get(public_path() . '/ui/list.html');
});
Route::get('listdetail', function () {
    return File::get(public_path() . '/ui/detail.html');
});

