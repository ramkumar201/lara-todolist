<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;



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
Route::get('/user',[App\Http\Controllers\UserController::class, 'index']);
Route::post('/upload',[App\Http\Controllers\UserController::class, 'uploadImage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Todo CRUD operations
// Route::Resource('/todo', 'TodoController');
Route::get('/todo', [App\Http\Controllers\TodoController::class, 'index'])->name('todo.index');
Route::get('/todo/create', [App\Http\Controllers\TodoController::class, 'create']);
Route::post('/todo/create', [App\Http\Controllers\TodoController::class, 'store']);
Route::get('/todo/view{todo}',[App\Http\Controllers\TodoController::class, 'view']);
Route::get('/todo/edit{todo}', [App\Http\Controllers\TodoController::class, 'edit']);
Route::patch('/todo/update{todo}', [App\Http\Controllers\TodoController::class, 'update'])->name('todo.update'); //also us put
Route::delete('/todo/delete{todo}', [App\Http\Controllers\TodoController::class, 'delete']);