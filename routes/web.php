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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [UserController::class, 'index'])->name('user-index');
Route::get('create-user', [UserController::class, 'create']);
Route::post('users/store', [UserController::class, 'store'])->name('users/store');
Route::get('edit-data{user_id}', [UserController::class, 'edit']);
Route::post('update-data', [UserController::class, 'update'])->name('updateData');
Route::get('delete-data{user_id}', [UserController::class, 'delete']);
Route::get('show-data{user_id}', [UserController::class, 'show']);
