<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('layout.mainBody');
});
Route::get('/charts', function () {
    return view('layout.charts');
});
Route::get('/tables', [UserController::class, 'index'])->name('tables.index');

Route::resource('users', UserController::class);
