<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventReservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EventReservationController extends Controller
{
    public function create(Event $event): View
    {
        return view('events.reservation', compact('event'));
    }

    public function store(Request $request, Event $event): RedirectResponse
    {
        $validated = $request->validate(EventReservation::rules());

        EventReservation::create([
            'event_id' => $event->id,
            ...$validated,
        ]);

        return redirect()->route('events.reservations.success', $event);
    }
}
