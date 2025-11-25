<?php

namespace App\Filament\Resources\EventCategories\Schemas;


use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class EventCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Kategorie')
                    ->schema([
                        TextInput::make('name')
                            ->label('Název')
                            ->required(),
                        Textarea::make('description')
                            ->label('Popis')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
