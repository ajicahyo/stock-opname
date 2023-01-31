<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockOpnameController;

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

Route::get('/', [StockOpnameController::class, 'show']);
Route::get('/barang/{id}', [StockOpnameController::class, 'detail']);
Route::post('/save', [StockOpnameController::class, 'save']);
