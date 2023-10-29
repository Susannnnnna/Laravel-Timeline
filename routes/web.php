<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Enums\UserRole;

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

Route::middleware(['auth'])->group(function() {
    Route::middleware(['can:isAdmin'])->group(function() {       
        Route::get('/users/list', [UserController::class, 'index']);
        Route::delete('/users/{user}', [UserController::class, 'destroy']);
    });

        Route::get('/events', [EventController::class, 'index'])->name('events.index');
        Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
        Route::post('/events', [EventController::class, 'store'])->name('events.store');
        Route::get('/events/edit/{event}', [EventController::class, 'edit'])->name('events.edit');
        Route::post('/events/{event}', [EventController::class, 'update'])->name('events.update');
        Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

        Route::get('/event_categories', [EventCategoryController::class, 'index'])->name('event_categories.index');
        Route::get('/event_categories/create', [EventCategoryController::class, 'create'])->name('event_categories.create');
        Route::post('/event_categories', [EventCategoryController::class, 'store'])->name('event_categories.store');
        Route::get('/event_categories/edit/{event_category}', [EventCategoryController::class, 'edit'])->name('event_categories.edit');
        Route::post('/event_categories/{event_category}', [EventCategoryController::class, 'update'])->name('event_categories.update');
        Route::delete('/event_categories/{event_category}', [EventCategoryController::class, 'destroy'])->name('event_categories.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');