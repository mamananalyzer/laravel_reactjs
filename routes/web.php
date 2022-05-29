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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\BasesController@index');
Route::get('/products/create', 'BasesController@create');
Route::get('/products/{product}', 'BasesController@show');
Route::post('/products', 'BasesController@store');
Route::delete('/products/{product}', 'BasesController@destroy');
Route::get('/products/{product}/edit', 'BasesController@edit');
Route::patch('/products/{product}', 'BasesController@update');


Route::get('/wedding', function () {
    return view('wedding.index');
});
Route::get('/invitation', function () {
    return view('invitation.index');
});
Route::get('/lovely', function () {
    return view('invitation.lovly');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
