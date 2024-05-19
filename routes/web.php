<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/',[UserController::class,'index'])->name('/');
Route::get('/userCreate',[UserController::class,'create'])->name('user.create');
Route::post('/userInsert',[UserController::class,'insert'])->name('user.insert');

Route::get('/userEdit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::post('/userUpdate/{id}',[UserController::class,'update'])->name('user.update');

Route::get('/userDelete/{id}',[UserController::class, 'delete'])->name('user.delete');


