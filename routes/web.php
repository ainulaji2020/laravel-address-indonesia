<?php

use App\Http\Controllers\citysController;
use App\Http\Controllers\DistrictsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvincesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProvincesController::class, 'index']);
Route::get('provinsi/create', [ProvincesController::class, 'create']);
Route::post('provinsi/store', [ProvincesController::class, 'store']);
Route::get('provinsi/detail/{id}', [ProvincesController::class, 'show']);
Route::get('provinsi/edit/{id}', [ProvincesController::class, 'edit']);
Route::put('provinsi/update/{id}', [ProvincesController::class, 'update']);
Route::get('provinsi/delete/{id}', [ProvincesController::class, 'destroy']);

Route::get('/citys',[CitysController::class, 'index']);
Route::get('citys/create',[CitysController::class, 'create']);
Route::post('citys/store',[CitysController::class, 'store']);
Route::get('citys/detail/{id}',[CitysController::class, 'show']);
Route::get('citys/edit/{id}',[CitysController::class, 'edit']);
Route::put('citys/update/{id}',[CitysController::class, 'update']);
Route::get('citys/delete/{id}',[CitysController::class, 'destroy']);

Route::get('/districts',[districtsController::class, 'index']);

