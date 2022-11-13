<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ShrubbyController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;

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

//Tag
Route::get('searchTag',[TagController::class,'indexSearchTag']);
Route::post('searchTag',[TagController::class,'searchByTag'])->name('searchTag');
Route::post('followTag/{id}',[TagController::class,'follow'])->name('follow');

    //Shrubby
// create new thread
Route::get('shrubbycreate', [ShrubbyController::class, 'createShrubby']);
Route::post('shrubbycreate', [ShrubbyController::class, 'create'])->name('shrubbycreate');
Route::post('/upload', [ShrubbyController::class, 'uploadImageShrubby'])->name('ckeditor.upload');
//
Route::get('shrubbypage/{id}', [ShrubbyController::class, 'pageShrubby'])->name('showShrubby');
Route::get('shrubbypage/{id}/edit', [ShrubbyController::class, 'editShrubby']);
                                                                            // ->middleware('user.secutiry');
Route::put('shrubbypage/{id}', [ShrubbyController::class, 'updateShrubby'])->name('updateShrubby');
Route::delete('shrubbypage/{id}', [ShrubbyController::class, 'deleteShrubby']);

Route::get('shrubbyrecommand', [ShrubbyController::class, 'shrubbyrecommand'])->name('shrubbyrecommand');
Route::get('shrubbynewby', [ShrubbyController::class, 'shrubbynewby'])->name('shrubbynewby');
// Route::get('shrubbycreate', [ShrubbyController::class, 'createShrubby'])->name('shrubbycreate');
// Route::get('shrubbyupdate', [ShrubbyController::class, 'updateShrubby']);
// Route::get('shrubbypage', [ShrubbyController::class, 'pageShrubby'])->name('shrubbypage');

//comment
Route::post('comment/{shrubbyid}/{parentid}',[ShrubbyController::class,'commentPost'])->name('commentpost');

//profile image
Route::get('upload-profileimage',[ShrubbyController::class, 'uploadProfileIndex']);
Route::post('crop',[ShrubbyController::class, 'crop'])->name('croppict');

Route::view('/journal/update','journal.journal-profile-update')->name('updateJournalProfile');

Route::view('/clumppycreate','clumppy.clumppycreate')->name('clumppycreate');
Route::view('/clumppypage','clumppy.clumppypage')->name('clumppypage');
Route::view('/clumppyupdate','clumppy.clumppyupdate')->name('clumppyupdate');

Route::view('/myshrubby','journal.myshrubby')->name('myshrubby');
Route::view('/myclumppy','journal.myclumppy')->name('myclumppy');

//like
Route::post('shrubbypage/like/{id}',[ShrubbyController::class,'likeShrubby'])->name('like.shrubby');
Route::post('shrubbypage/like/comment/{id}',[CommentController::class,'likeComment'])->name('like.comment');
