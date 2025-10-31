<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\EventCategory;
use Illuminate\View\View;

class EventCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $categories = EventCategory::withCount('events')->orderBy('nazev')->paginate(15);

        return view('event-categories.index', compact('categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(EventCategory $eventCategory): View
    {
        $eventCategory->load('events');

        return view('event-categories.show', compact('eventCategory'));
    }
}
