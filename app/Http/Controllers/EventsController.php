<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = Event::with(['eventCategory', 'lecturers'])->upcoming();

        // Filtrování podle kategorie
        if (request('category')) {
            $query->byCategory((int) request('category'));
        }

        // Fulltextové vyhledávání
        if (request('search')) {
            $query->search(request('search'));
        }

        $events = $query->orderBy('datetime_from')->paginate(12);
        $categories = EventCategory::orderBy('name')->get();

        return view('events.index', compact('events', 'categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event): View
    {
        $event->load(['eventCategory', 'lecturers']);

        return view('events.show', compact('event'));
    }

    /**
     * Register user for event
     */
    public function register(Request $request, Event $event): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'jmeno' => 'required|string|max:255',
            'prijmeni' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefon' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Chyba při registraci. Zkontrolujte zadané údaje.');
        }

        // Zde by byla logika pro registraci uživatele na událost
        // a případně přesměrování na platební bránu

        return redirect()->back()
            ->with('success', 'Registrace byla úspěšně odeslána.');
    }
}
