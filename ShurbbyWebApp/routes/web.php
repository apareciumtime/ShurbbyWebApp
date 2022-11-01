<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ShrubbyController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::view('home', 'homepage.home')->name('home');
Route::view('timeline', 'timeline.index')->name('timeline');
Route::view('journal', 'journal.index')->name('journal');

Auth::routes();

Route::middleware(['auth', 'is_admin'])->get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

Route::view('login', 'auth.login')->name('login');
Route::post('register', [RegisterController::class, 'register']);
// Route::get('search', #ControllerClass for  searching) --> search route method

Route::get('shrubbyrecommand', [ShrubbyController::class, 'shrubbyrecommand'])->name('shrubbyrecommand');
Route::get('shrubbynewby', [ShrubbyController::class, 'shrubbynewby'])->name('shrubbynewby');
Route::get('shrubbycreate', [ShrubbyController::class, 'createShrubby'])->name('shrubbycreate');
Route::get('shrubbyupdate', [ShrubbyController::class, 'updateShrubby'])->name('shrubbyupdate');
Route::get('shrubbypage', [ShrubbyController::class, 'pageShrubby'])->name('shrubbypage');