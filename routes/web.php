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
Route::get('/next', function () {
    return view('layout.project');
});
Route::get('/welcome', function () {
    return view('layout.welcome');
});
Route::get('/app', function () {
    return view('App');
});
Route::get('/invitation', function () {
    return view('invitation.index');
});
Route::get('/lovely', function () {
    return view('invitation.lovly');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
