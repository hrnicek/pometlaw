<?php

namespace App\Filament\Resources\EventReservations\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class EventReservationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('event.name')
                    ->label('Událost'),
                TextEntry::make('first_name')
                    ->label('Jméno'),
                TextEntry::make('last_name')
                    ->label('Příjmení'),
                TextEntry::make('email')
                    ->label('E-mail'),
                TextEntry::make('phone')
                    ->label('Telefon')
                    ->placeholder('-'),
                TextEntry::make('note')
                    ->label('Poznámka')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->label('Vytvořeno')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('Aktualizováno')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
