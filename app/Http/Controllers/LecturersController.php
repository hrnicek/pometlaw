<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\View\View;

class LecturersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $lecturers = Lecturer::withCount('events')
            ->orderBy('last_name')
            ->paginate(15);

        return view('lecturers.index', compact('lecturers'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer): View
    {
        $lecturer->load(['events' => function ($query) {
            $query->upcoming()->orderBy('event_date');
        }]);

        return view('lecturers.show', compact('lecturer'));
    }
}
