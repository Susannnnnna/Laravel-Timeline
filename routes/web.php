<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/events', [EventController::class, 'index'])->name('events.index')->middleware('auth');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create')->middleware('auth');
// Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show')->middleware('auth');
Route::post('/events', [EventController::class, 'store'])->name('events.store')->middleware('auth');
Route::get('/events/edit/{event}', [EventController::class, 'edit'])->name('events.edit')->middleware('auth');
Route::post('/events/{event}', [EventController::class, 'update'])->name('events.update')->middleware('auth');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy')->middleware('auth');

Route::get('/users/list', [UserController::class, 'index'])->middleware('auth');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');