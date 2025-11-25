<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DateTimePicker;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Základní informace')
                    ->schema([
                        TextInput::make('name')
                            ->label('Název')
                            ->required(),
                        Textarea::make('description')
                            ->label('Popis')
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                Section::make('Čas a kapacita')
                    ->schema([
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
                    ])
                    ->columns(2),
                Section::make('Místo a kategorie')
                    ->schema([
                        TextInput::make('location')
                            ->label('Místo')
                            ->required(),
                        Select::make('event_category_id')
                            ->label('Kategorie události')
                            ->relationship('eventCategory', 'name')
                            ->preload()
                            ->searchable()
                            ->required(),
                    ])
                    ->columns(2),
            ]);
    }
}
