<?php

namespace App\Filament\Resources\EventReservations\Pages;

use App\Filament\Resources\EventReservations\EventReservationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditEventReservation extends EditRecord
{
    protected static string $resource = EventReservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
