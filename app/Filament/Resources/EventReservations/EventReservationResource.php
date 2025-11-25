<?php

namespace App\Filament\Resources\EventReservations;

use App\Filament\Resources\EventReservations\Pages\CreateEventReservation;
use App\Filament\Resources\EventReservations\Pages\EditEventReservation;
use App\Filament\Resources\EventReservations\Pages\ListEventReservations;
use App\Filament\Resources\EventReservations\Pages\ViewEventReservation;
use App\Filament\Resources\EventReservations\Schemas\EventReservationForm;
use App\Filament\Resources\EventReservations\Schemas\EventReservationInfolist;
use App\Filament\Resources\EventReservations\Tables\EventReservationsTable;
use App\Models\EventReservation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EventReservationResource extends Resource
{
    protected static ?string $model = EventReservation::class;

    protected static ?string $modelLabel = 'Rezervace';

    protected static ?string $pluralModelLabel = 'Rezervace';

    protected static ?string $navigationLabel = 'Rezervace';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'full_name';

    protected static \UnitEnum|string|null $navigationGroup = 'Události';

    public static function form(Schema $schema): Schema
    {
        return EventReservationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return EventReservationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EventReservationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEventReservations::route('/'),
            'create' => CreateEventReservation::route('/create'),
            'view' => ViewEventReservation::route('/{record}'),
            'edit' => EditEventReservation::route('/{record}/edit'),
        ];
    }
}
