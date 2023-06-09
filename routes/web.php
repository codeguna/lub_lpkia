<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

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
// GOOGLE LOGIN ROUTE
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
// END OF GOOGLE ROUTE
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('means', 'App\Http\Controllers\MeanController');
Route::resource('answers', 'App\Http\Controllers\AnswerController');
Route::resource('answer_details', 'App\Http\Controllers\AnswerDetailController');
Route::resource('students', StudentController::class);

