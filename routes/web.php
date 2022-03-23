<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskListController;

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

Route::get('/', [TaskListController::class, 'index']);

Route::post('/saveTaskRoute', [TaskListController::class, 'saveTask'])->name('saveTask');
Route::post('/checkCompleteRoute/{id}', [TaskListController::class, 'checkComplete'])->name('checkComplete');
