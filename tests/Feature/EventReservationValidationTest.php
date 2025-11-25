<?php

use App\Models\Event;
use App\Models\EventReservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\post;

uses(RefreshDatabase::class);

it('rejects reservation with missing required fields', function () {
    $event = Event::factory()->upcoming()->create();

    $response = post(route('events.reservations.store', $event), [
        'first_name' => '',
        'last_name' => '',
        'email' => '',
        'phone' => '',
        'note' => '',
    ]);

    $response->assertSessionHasErrors(['first_name', 'last_name', 'email']);
    expect(EventReservation::count())->toBe(0);
});

it('rejects reservation with invalid email', function () {
    $event = Event::factory()->upcoming()->create();

    $response = post(route('events.reservations.store', $event), [
        'first_name' => 'Jan',
        'last_name' => 'Novák',
        'email' => 'not-an-email',
        'phone' => '+420777000000',
    ]);

    $response->assertSessionHasErrors(['email']);
    expect(EventReservation::count())->toBe(0);
});

