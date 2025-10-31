<?php

use App\Http\Controllers\EventCategoriesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LecturersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Public Events routes
Route::get('events', [EventsController::class, 'index'])->name('events.index');
Route::get('events/{event}', [EventsController::class, 'show'])->name('events.show');
Route::post('events/{event}/register', [EventsController::class, 'register'])->name('events.register');

// Public Event Categories routes
Route::get('event-categories', [EventCategoriesController::class, 'index'])->name('event-categories.index');
Route::get('event-categories/{eventCategory}', [EventCategoriesController::class, 'show'])->name('event-categories.show');

// Public Lecturers routes
Route::get('lecturers', [LecturersController::class, 'index'])->name('lecturers.index');
Route::get('lecturers/{lecturer}', [LecturersController::class, 'show'])->name('lecturers.show');

// Static pages
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::view('faq', 'faq')->name('faq');
Route::view('terms', 'terms')->name('terms');
Route::view('privacy', 'privacy')->name('privacy');
