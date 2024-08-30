<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\navegacionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[navegacionController::class,'vinicio'])->name('vinicio');
Route::get('/listarlibros',[navegacionController::class,'listarlibros'])->name('listarlibros');
Route::get('/acercade',[navegacionController::class,'vacercade'])->name('vacercade');
Route::get('/vinicio',[navegacionController::class,'vinicio'])->name('vinicio');
