<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventCategoriesController;
use App\Http\Controllers\EventReservationController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LecturersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Public Events routes
Route::get('kurzy', [EventsController::class, 'index'])->name('events.index');
Route::get('kurz/{event}', [EventsController::class, 'show'])->name('events.show');
Route::post('events/{event}/register', [EventsController::class, 'register'])->name('events.register');
Route::get('events/{event}/rezervace', [EventReservationController::class, 'create'])->name('events.reservations.create');
Route::post('events/{event}/rezervace', [EventReservationController::class, 'store'])->name('events.reservations.store');
Route::get('kurz/{event}/rezervace/uspech', function (\App\Models\Event $event) {
    return view('events.reservation-success', compact('event'));
})->name('events.reservations.success');

// Public Event Categories routes
Route::get('event-categories', [EventCategoriesController::class, 'index'])->name('event-categories.index');
Route::get('event-categories/{eventCategory}', [EventCategoriesController::class, 'show'])->name('event-categories.show');

// Public Lecturers routes
Route::get('lecturers', [LecturersController::class, 'index'])->name('lecturers.index');
Route::get('lecturers/{lecturer}', [LecturersController::class, 'show'])->name('lecturers.show');

// Contact form
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

// Static pages
Route::view('o-nas', 'about')->name('about');
Route::view('kontakt', 'contact')->name('contact');
Route::view('faq', 'faq')->name('faq');
Route::view('terms', 'terms')->name('terms');
Route::view('privacy', 'privacy')->name('privacy');

// Articles
Route::get('clanky', [ArticlesController::class, 'index'])->name('articles.index');
Route::get('clanek/{article}', [ArticlesController::class, 'show'])->name('articles.show');
