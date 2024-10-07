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
Route::get('/greet', function () {
    $username = 'John';
    return view('welcome', ['name' => $username]);
});
Route::get('/pass-array', function () {
    $tasks = ['Bevásárlás', 'Piacra menni', 'Munka'];
    return view('tasklist', ['tasks' => $tasks]);
});

