<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});




Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('new', [UserController::class, 'create'])->name('user.create');
Route::post('store', [UserController::class, 'store'])->name('user.store');
Route::delete('/delete/{user}', [UserController::class, 'delete'])->name('user.delete');
Route::get('edit/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::put('update/{user}', [UserController::class, 'update'])->name('user.update');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
