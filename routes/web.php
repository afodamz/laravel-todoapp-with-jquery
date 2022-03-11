<?php

use App\Http\Controllers\TodoController;
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

//Route::get('/', function () {
//    return view('home');
//});
Route::get('/', [TodoController::class, 'index'])->name('home');
Route::post('add', [TodoController::class, 'create'])->name('createTodo');
Route::post('update/{id}', [TodoController::class, 'edit'])->name('todo.edit');
Route::post('status/{id}', [TodoController::class, 'changeStatus'])->name('status.update');
Route::post('delete/{id}', [TodoController::class, 'destroy'])->name('todo.delete');
