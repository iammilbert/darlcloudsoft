<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\subscribersController;
use App\Http\Controllers\studentController;

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

Route::view('/', 'index');

Route::view('services', 'services');
Route::view('about', 'about');

Route::view('portfolio', 'portfolio');
Route::view('contact', 'contact');
Route::view('blog', 'blog');
Route::view('elearning', 'elearning');
Route::view('register', 'register');
Route::view('login', 'login');
Route::view('application', 'application');

Route::POST("user-contact", [ContactController::class, 'userscontact']);

Route::POST("user-signup", [usersController::class, 'usersignup']);

Route::POST("user-newsletter", [subscribersController::class, 'subscribers']);

Route::POST("login-user", [usersController::class, 'loginUser'])->name('login-user');

Route::get("student-dashboard", [usersController::class, 'dashboard'])->middleware('isLoggedIn');

Route::get("/logout", [usersController::class, 'logout']);

Route::POST("application-form", [studentController::class, 'applicationForm']);