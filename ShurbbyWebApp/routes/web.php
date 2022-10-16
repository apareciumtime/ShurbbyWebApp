<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//add
// Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


/* /homepage -> go to UI homepage : compare with your home*/
/* /signin -> go to UI signin */ 
/* /signup -> go to UI signup compare with your register */

Route::resource('homepage', HomepageController::class);

Route::get('/signin', function () {
    return view('homepage.signin');
});

Route::get('/signup', function () {
    return view('homepage.signup');
});
