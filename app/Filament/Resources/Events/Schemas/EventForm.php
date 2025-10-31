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
                DateTimePicker::make('datetime_from')
                    ->label('Začátek události')
                    ->required()
                    ->after(now())
                    ->rules(['after:now'])
                    ->validationMessages([
                        'after' => 'Začátek události musí být v budoucnosti.',
                    ]),
                DateTimePicker::make('datetime_to')
                    ->label('Konec události')
                    ->required()
                    ->after('datetime_from')
                    ->rules(['after:datetime_from'])
                    ->validationMessages([
                        'after' => 'Konec události musí být po začátku.',
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
