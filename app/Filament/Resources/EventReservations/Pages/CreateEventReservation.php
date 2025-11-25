<?php

namespace App\Filament\Resources\EventReservations\Pages;

use App\Filament\Resources\EventReservations\EventReservationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEventReservation extends CreateRecord
{
    protected static string $resource = EventReservationResource::class;
}
