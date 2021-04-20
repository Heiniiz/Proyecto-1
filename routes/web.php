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

Route::get('reyna', function () {
    return view ('reyna.index');
})->name("route_reyna");

Route::get('ramiro', function () {
    return view ('ramiro.index');
})->name("route_ramiro");

Route::get('ernesto', function () {
    return view ('ernesto.index');
})->name("route_ernesto");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
