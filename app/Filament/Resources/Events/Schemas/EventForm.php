<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Název')
                    ->required(),
                Textarea::make('description')
                    ->label('Popis')
                    ->required()
                    ->columnSpanFull(),
                DateTimePicker::make('event_date')
                    ->label('Datum události')
                    ->required()
                    ->after(now())
                    ->rules(['after:now'])
                    ->validationMessages([
                        'after' => 'Datum události musí být v budoucnosti.',
                    ]),
                TextInput::make('capacity')
                    ->label('Kapacita')
                    ->required()
                    ->numeric(),
                TextInput::make('price')
                    ->label('Cena')
                    ->required()
                    ->numeric()
                    ->prefix('Kč'),
                TextInput::make('location')
                    ->label('Místo')
                    ->required(),
                Select::make('event_category_id')
                    ->label('Kategorie události')
                    ->relationship('eventCategory', 'name')
                    ->required(),
            ]);
    }
}
