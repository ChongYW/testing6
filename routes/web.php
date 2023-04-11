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

Route::get('/home', [App\Http\Controllers\EditControlller::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\EditControlller::class, 'index'])->name('home');

//Route::get('/edit/{id}', 'EditControlller@edit');

Route::get('/edit/{id}', [App\Http\Controllers\EditControlller::class, 'edit'])->name('edit');

Route::put('/update/{id}', [App\Http\Controllers\EditControlller::class, 'update']);
