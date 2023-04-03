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


Route::get('/simulation', [\App\Http\Controllers\Simulation\SimulationController::class, 'index'])->name('simulation');
Route::get('/simulation/computers/all', [\App\Http\Controllers\Simulation\SimulationController::class, 'all'])->name('computers.all');
Route::post('/simulation/computers/all', [\App\Http\Controllers\Simulation\SimulationController::class, 'login'])->name('computers.all.login');
Route::post('/simulation/set_session', [\App\Http\Controllers\Simulation\SimulationController::class, 'setsession'])->name('setsession');

Route::get('/simulation/computers/{computer}', [\App\Http\Controllers\Simulation\SimulationController::class, 'showcomputer'])->name('computers.show');

Route::get('/home', [\App\Http\Controllers\Simulation\SimulationController::class, 'login'])->name('login');

Route::post('/logout', [\App\Http\Controllers\User\UserController::class, 'logout'])->name('user.logout');
Route::get('/logout', [\App\Http\Controllers\User\UserController::class, 'logout'])->name('user.logout');
Route::get('/logout/{user}', [\App\Http\Controllers\User\UserController::class, 'emptyavailabletime'])->name('user.logout.user');

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

    // User > Manage User Roles
    Route::get('/user/manageuserroles', [App\Http\Controllers\Admin\UsersController::class, 'manageuserroles'])->name('user.manageuserroles');

    // User > Users Billing Information
    Route::get('/user/usersbillinginformation', [App\Http\Controllers\Admin\UsersController::class, 'usersbillinginformation'])->name('user.usersbillinginformation');

    // Computers
    Route::get('/computer/add', [App\Http\Controllers\Admin\ComputersController::class, 'add'])->name('computer.add');
    Route::post('/computer/add', [App\Http\Controllers\Admin\ComputersController::class, 'addcomputer'])->name('addcomputer');

    Route::get('/computer/viewcomputers', [App\Http\Controllers\Admin\ComputersController::class, 'computerView'])->name('computer.view');
    Route::get('/computer/editcomputer/{computer}', [App\Http\Controllers\Admin\ComputersController::class, 'computerEdit'])->name('computer.edit');
    Route::post('/computer/editcomputer/{computer}', [App\Http\Controllers\Admin\ComputersController::class, 'updatecomputer'])->name('updatecomputer');


    // Pricing and Packages


    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('adminDashboard');
    });
});
