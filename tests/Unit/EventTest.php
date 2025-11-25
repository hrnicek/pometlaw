<?php

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\EventCategory;
use App\Models\Lecturer;

uses(TestCase::class, RefreshDatabase::class);

it('formats event date from datetime_from', function () {
    $event = Event::factory()->upcoming()->create();

    expect($event->formatted_event_date)
        ->toBe($event->datetime_from->format('j. n. Y'));
});

it('detects upcoming by datetime_from', function () {
    $upcoming = Event::factory()->upcoming()->create();
    $past = Event::factory()->past()->create();

    expect($upcoming->is_upcoming)->toBeTrue();
    expect($past->is_upcoming)->toBeFalse();
});

it('upcoming scope filters by datetime_from', function () {
    $future = Event::factory()->upcoming()->create();
    $past = Event::factory()->past()->create();

    $result = Event::upcoming()->get();

    expect($result)->toHaveCount(1);
    expect($result->first()->id)->toBe($future->id);
});

it('factory creates coherent datetime range', function () {
    $event = Event::factory()->create();

    expect($event->datetime_from)->not()->toBeNull();
    expect($event->datetime_to)->not()->toBeNull();
    expect($event->datetime_to->greaterThan($event->datetime_from))->toBeTrue();
});

it('generates slug from name', function () {
    $event = Event::factory()->create([
        'name' => 'Test Slug Event',
    ]);

    expect($event->slug)->not()->toBeEmpty();
    expect($event->slug)->toContain('test-slug-event');
});

it('filters by category with scopeByCategory', function () {
    $categoryA = EventCategory::factory()->create();
    $categoryB = EventCategory::factory()->create();

    $eventA = Event::factory()->forCategory($categoryA)->create();
    Event::factory()->forCategory($categoryB)->create();

    $filtered = Event::byCategory($categoryA->id)->get();

    expect($filtered)->toHaveCount(1);
    expect($filtered->first()->id)->toBe($eventA->id);
});

it('searches across name, description and location', function () {
    $event1 = Event::factory()->create([
        'name' => 'Seminář VZ',
        'description' => 'Detailní rozbor VZ',
        'location' => 'Brno',
    ]);
    Event::factory()->create([
        'name' => 'Jiný název',
        'description' => 'Jiný popis',
        'location' => 'Praha',
    ]);

    expect(Event::search('Seminář')->pluck('id'))->toContain($event1->id);
    expect(Event::search('rozbor')->pluck('id'))->toContain($event1->id);
    expect(Event::search('Brno')->pluck('id'))->toContain($event1->id);
    expect(Event::search('Neexistuje')->pluck('id'))->not()->toContain($event1->id);
});

it('relates lecturers via pivot', function () {
    $event = Event::factory()->create();
    $lec1 = Lecturer::factory()->create();
    $lec2 = Lecturer::factory()->create();

    $event->lecturers()->attach([$lec1->id, $lec2->id]);
    $event->load('lecturers');

    expect($event->lecturers->count())->toBe(2);
});
