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
    return view('main');
});

Route::get('/admin',[\App\Http\Controllers\AdminController::class, 'admin_panel'])->name('admin_panel');
Route::get('/events',[\App\Http\Controllers\AdminController::class, 'events']);


Route::get('/etkinlikler',[\App\Http\Controllers\EventController::class, 'indexViewEvent']);
Route::get('/ekle',[\App\Http\Controllers\EventController::class, 'createEventView']);
Route::post('/eklendi', [\App\Http\Controllers\EventController::class, 'createEvent'])->name('events.create');
Route::get('/sil/{id}',[\App\Http\Controllers\EventController::class, 'deleteEvent'])->where(array('id'=>'[0-9]+'));
Route::get('/guncel/{id}',[\App\Http\Controllers\EventController::class, 'updateViewEvent'])->where(array('id'=>'[0-9]+'));
Route::post('/guncel/{id}', [\App\Http\Controllers\EventController::class, 'updateEvent'])->where(array('id'=>'[0-9]+'));


Route::get('/kisiler', [\App\Http\Controllers\UserController::class, 'indexView'])->name('person');
Route::get('/kayit', [\App\Http\Controllers\UserController::class, 'createView']);
Route::post('/kaydet', [\App\Http\Controllers\UserController::class, 'create']);
Route::get('/sil/{id}',[\App\Http\Controllers\UserController::class, 'delete'])->where(array('id'=>'[0-9]+'));
Route::get('/guncel/{id}',[\App\Http\Controllers\UserController::class, 'updateView'])->where(array('id'=>'[0-9]+'));
Route::post('/guncel/{id}', [\App\Http\Controllers\UserController::class, 'update'])->where(array('id'=>'[0-9]+'))->name('user.update');

Route::get('/indir',[\App\Http\Controllers\ExcelDownloadController::class, 'userDownload'])->name('user.download');

Route::get('/festival', [\App\Http\Controllers\EventController::class,'indexFestival'])->name('festival');
Route::get('/konferans', [\App\Http\Controllers\EventController::class,'indexKonferans'])->name('konferans');
Route::get('/konser', [\App\Http\Controllers\EventController::class,'indexKonser'])->name('konser');
Route::get('/müze', [\App\Http\Controllers\EventController::class,'indexMüze'])->name('müze');
Route::get('/sahne', [\App\Http\Controllers\EventController::class,'indexSahne'])->name('sahne');
Route::get('/sergi', [\App\Http\Controllers\EventController::class,'indexSergi'])->name('sergi');
Route::get('/webinar', [\App\Http\Controllers\EventController::class,'indexWebinar'])->name('webinar');

Route::get('/etkinliklerr', [\App\Http\Controllers\EventController::class,'indexEvent']);





Route::get('/bilet_al',[\App\Http\Controllers\UserController::class, 'bilet_al'])->name('bilet_al');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[\App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
