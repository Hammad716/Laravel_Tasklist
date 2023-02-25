<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\todoController;
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


Route::get('/',[todoController::class , 'showItem']);
Route::get('/add',[todoController::class , 'store']);
Route::get('/delete/{Sr}',[todoController::class, 'destroy']);
Route::get('/edit/{Sr}', [todoController::class, 'edit']);
Route::get('/update', [todoController::class, 'update']);

