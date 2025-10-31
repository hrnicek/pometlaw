<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $upcomingEvents = Event::with(['eventCategory', 'lecturers'])
            ->upcoming()
            ->latest('event_date')
            ->limit(6)
            ->get();

        $nearestEvent = Event::with(['eventCategory', 'lecturers'])
            ->upcoming()
            ->orderBy('datetime_from')
            ->first();

        return view('home', [
            'upcomingEvents' => $upcomingEvents,
            'nearestEvent' => $nearestEvent,
        ]);
    }
}
