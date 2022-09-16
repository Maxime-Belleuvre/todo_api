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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('api/todo', [App\Http\Controllers\TodoController::class, 'list'])->name('todo.list');
Route::post('api/todo', [App\Http\Controllers\TodoController::class, 'saveTodo'])->name('todo.save');
Route::post('api/todo/done/{id}', [App\Http\Controllers\TodoController::class, 'makeAsOne'])->name('todo.end');
Route::delete('api/todo/delete/{id}', [App\Http\Controllers\TodoController::class, 'deleteTodo'])->name('todo.delete');

