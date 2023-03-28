<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/add', [App\Http\Controllers\Admin\UsersController::class, 'useradd'])->name('user.add');
Route::get('/user/edit', [App\Http\Controllers\Admin\UsersController::class, 'useredit'])->name('user.edit');
Route::get('/user/delete', [App\Http\Controllers\Admin\UsersController::class, 'userdelete'])->name('user.delete');

// POST ROUTES
Route::post('/user/add', [App\Http\Controllers\Admin\UsersController::class, 'adduser'])->name('adduser');
