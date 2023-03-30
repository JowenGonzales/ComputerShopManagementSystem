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





Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    // Authentication
    Route::get('/login', [\App\Http\Controllers\Admin\AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [\App\Http\Controllers\Admin\AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::post('/logout', [\App\Http\Controllers\Admin\AdminAuthController::class, 'adminLogout'])->name('admin.logout');


    // Dashboard
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // User
    // User > Add
    Route::get('/user/add', [App\Http\Controllers\Admin\UsersController::class, 'useradd'])->name('user.add');
    Route::post('/user/add', [App\Http\Controllers\Admin\UsersController::class, 'adduser'])->name('adduser');

    
    // User > Edit
    Route::get('/user/edit', [App\Http\Controllers\Admin\UsersController::class, 'useredit'])->name('user.edit');
    Route::get('/user/edit/{user}', [App\Http\Controllers\Admin\UsersController::class, 'userview'])->name('user.view');




    // User > Delete
    Route::get('/user/delete', [App\Http\Controllers\Admin\UsersController::class, 'userdelete'])->name('user.delete');
    Route::post('/user/delete', [App\Http\Controllers\Admin\UsersController::class, 'deleteuser'])->name('deleteuser');
    Route::post('/user/edit/{user}', [App\Http\Controllers\Admin\UsersController::class, 'updateuser'])->name('user.view');




    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('adminDashboard');
    });
});
