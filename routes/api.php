<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\MasterBarangController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('/',[TodoController::class, 'index']);
Route::get('tablepenjualan/{pageno}/{limit}',[PenjualanController::class, 'paginatedPenjualan']);
Route::get('mounthjual/{year}/{month}',[PenjualanController::class, 'selectMonthJual']);
Route::get('getallbarang', [MasterBarangController::class, "getAllBarang"]);
Route::get('tabledetailpenjual/{pageno}/{limit}', [DetailPenjualanController::class, "paginatedDetailPenjualan"]);