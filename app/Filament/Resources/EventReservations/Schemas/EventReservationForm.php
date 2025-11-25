<?php

namespace App\Filament\Resources\EventReservations\Schemas;


use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class EventReservationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Událost')
                    ->schema([
                        Select::make('event_id')
                            ->label('Událost')
                            ->searchable()
                            ->preload()
                            ->relationship('event', 'name')
                            ->required(),
                    ]),
                Section::make('Kontaktní údaje')
                    ->schema([
                        TextInput::make('first_name')
                            ->label('Jméno')
                            ->required(),
                        TextInput::make('last_name')
                            ->label('Příjmení')
                            ->required(),
                        TextInput::make('email')
                            ->label('E‑mail')
                            ->email()
                            ->required(),
                        TextInput::make('phone')
                            ->label('Telefon')
                            ->tel(),
                    ])
                    ->columns(2),
                Section::make('Poznámka')
                    ->schema([
                        Textarea::make('note')
                            ->label('Poznámka')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
