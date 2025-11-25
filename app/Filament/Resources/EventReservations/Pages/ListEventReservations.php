<?php

namespace App\Filament\Resources\EventReservations\Pages;

use App\Filament\Resources\EventReservations\EventReservationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEventReservations extends ListRecords
{
    protected static string $resource = EventReservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
