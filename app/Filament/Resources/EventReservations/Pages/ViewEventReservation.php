<?php

namespace App\Filament\Resources\EventReservations\Pages;

use App\Filament\Resources\EventReservations\EventReservationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEventReservation extends ViewRecord
{
    protected static string $resource = EventReservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
