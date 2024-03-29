<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\PostsController@index', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/','App\Http\Controllers\PagesController@index');
Route::view('/about','pages.about');
Route::view('/contact','pages.contact');
Route::resource('posts', 'App\Http\Controllers\PostsController');



// Route::get('/', function () {
//    return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
