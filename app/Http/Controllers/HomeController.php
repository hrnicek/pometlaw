<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Article;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $upcomingEvents = Event::with(['eventCategory', 'lecturers'])
            ->upcoming()
            ->latest('datetime_from')
            ->limit(6)
            ->get();

        $nearestEvent = Event::with(['eventCategory', 'lecturers'])
            ->upcoming()
            ->orderBy('datetime_from')
            ->first();

        $latestArticles = Article::query()
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->limit(3)
            ->get();

        return view('home', [
            'upcomingEvents' => $upcomingEvents,
            'nearestEvent' => $nearestEvent,
            'latestArticles' => $latestArticles,
        ]);
    }
}
