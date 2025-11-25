<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Cache;
use App\Models\Event;

class Navbar extends Component
{
    public int $eventsCount;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->eventsCount = Cache::remember('events.upcoming_count', 600, fn () => Event::upcoming()->count());
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar', [
            'eventsCount' => $this->eventsCount,
        ]);
    }
}
