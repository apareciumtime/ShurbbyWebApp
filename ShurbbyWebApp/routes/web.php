<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ShrubbyController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\ClumppyController;
use App\Http\Controllers\MovementController;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::view('timeline', 'timeline.index')->name('timeline');

Route::view('journal', 'journal.index')->name('journal')->middleware('auth');;


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
Route::get('shrubbypage/{id}', [ShrubbyController::class, 'pageShrubby'])->name('shrubbypage');
Route::get('shrubbypage/{id}/edit', [ShrubbyController::class, 'editShrubby']);
                                                                            // ->middleware('user.secutiry');
Route::put('shrubbypage/{id}', [ShrubbyController::class, 'updateShrubby'])->name('updateShrubby');
Route::delete('shrubbypage/{id}', [ShrubbyController::class, 'deleteShrubby']);

Route::get('shrubbyrecommend', [ShrubbyController::class, 'shrubbyrecommend'])->name('shrubbyrecommend');
Route::get('shrubbynewby', [ShrubbyController::class, 'shrubbynewby'])->name('shrubbynewby');
// Route::get('shrubbycreate', [ShrubbyController::class, 'createShrubby'])->name('shrubbycreate');
// Route::get('shrubbyupdate', [ShrubbyController::class, 'updateShrubby']);
// Route::get('shrubbypage', [ShrubbyController::class, 'pageShrubby'])->name('shrubbypage');

//comment
Route::post('comment/{shrubbyid}/{parentid}',[ShrubbyController::class,'commentPost'])->name('commentpost');
Route::delete('comment/{id}', [CommentController::class, 'deleteComment'])->name('delete.comment');
Route::post('commentincreasecredit',[CommentController::class, 'increaseCredit'])->name('increasecredit.comment');
Route::post('commentdecreasecredit',[CommentController::class, 'decreaseCredit'])->name('decreasecredit.comment');
Route::post('commentaccept',[CommentController::class, 'accept'])->name('accept.comment');


//profile image
Route::get('upload-profileimage',[ShrubbyController::class, 'uploadProfileIndex']);
Route::post('crop',[ShrubbyController::class, 'crop'])->name('croppict');

Route::view('/journal/update','journal.journal-profile-update')->name('updateJournalProfile');
Route::post('editProfile',[ProfileController::class,'editProfile'])->name('editProfile');

    //Clumppy
// Route::view('/clumppycreate','clumppy.clumppycreate')->name('clumppycreate');
Route::get('/clumppycreate',[ClumppyController::class,'indexCreateClumppy'])->name('clumppycreate');
// Route::view('/clumppypage','clumppy.clumppypage')->name('clumppypage');1
Route::get('clumppypage/{id}', [ClumppyController::class, 'pageClumppy'])->name('clumppypage');
Route::get('/clumppypage/{id}/edit', [ClumppyController::class, 'editClumppy']);
Route::put('/clumppypage/{id}', [ClumppyController::class, 'updateClumppy'])->name('updateclumppy');
Route::delete('clumppypage/{id}', [ClumppyController::class, 'deleteClumppy']);

Route::post('/createclumppy/{empty_clumppy_id}',[ClumppyController::class,'createClumppy'])->name('createclumppy');
Route::post('/cropcover/{empty_clumppy_id}',[ClumppyController::class,'cropCover'])->name('cropcover');

    //My
// Route::view('/myshrubby','journal.myshrubby')->name('myshrubby');
Route::get('myshrubby', [ShrubbyController::class, 'myShrubbyPage'])->name('myshrubby');
Route::get('/myclumppy',[ClumppyController::class, 'myClumppyPage'])->name('myclumppy');

Route::view('/clumppymovementcreate','clumppy.clumppymovementcreate')->name('clumppymovementcreate');

//like
Route::post('shrubbypage/like/{id}',[ShrubbyController::class,'likeShrubby'])->name('like.shrubby');
Route::post('shrubbypage/like/comment/{id}',[CommentController::class,'likeComment'])->name('like.comment');
Route::post('movementpage/like/{id}',[MovementController::class,'likeMovement'])->name('like.movement');

    //Movement
Route::get('movementcreate/{clumppy_id}', [MovementController::class, 'createMovementPage'])->name('movementcreate');
Route::get('movementpage/{movement_id}', [MovementController::class, 'indexMovementPage'])->name('movementpage');
Route::get('movementupdate/{movement_id}',[MovementController::class, 'updateMovementpage'])->name('movementupdate');

Route::post('/uploadmovementimage',[MovementController::class,'uploadMovementImage'])->name('uploadmovementimage');
Route::post('/createmovement/{movement_id}',[MovementController::class,'createMovement'])->name('createmovement');
Route::post('/updatemovement/{id}',[MovementController::class,'updateMovement'])->name('updatemovement');
Route::delete('/deletemovement/{id}',[MovementController::class,'deleteMovement'])->name('deletemovement');

Route::post('commentmovement/{id}',[MovementController::class,'commentMovement'])->name('commentmovement');


Route::get('/clumppyrecommend',[ClumppyController::class, 'clumppyrecommend'])->name('clumppyrecommend');
Route::get('/clumppynewby',[ClumppyController::class, 'clumppynewby'])->name('clumppynewby');

//search
Route::get('/search', [TagController::class, 'searchByTag'])->name('search');
