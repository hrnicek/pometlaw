<?php

use App\Models\Event;
use App\Models\EventReservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\post;

uses(RefreshDatabase::class);

it('creates reservation and redirects to success', function () {
    $event = Event::factory()->upcoming()->create();

    $response = post(route('events.reservations.store', $event), [
        'first_name' => 'Jan',
        'last_name' => 'Novák',
        'email' => 'jan.novak@example.com',
        'phone' => '+420777000000',
        'note' => 'Poznámka',
    ]);

    $response->assertRedirect(route('events.reservations.success', $event));

    expect(EventReservation::count())->toBe(1);
    $reservation = EventReservation::first();
    expect($reservation->event_id)->toBe($event->id);
    expect($reservation->first_name)->toBe('Jan');
});
