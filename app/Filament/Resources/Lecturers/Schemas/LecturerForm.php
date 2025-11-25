<?php

namespace App\Filament\Resources\Lecturers\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LecturerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Osobní údaje')
                    ->schema([
                        TextInput::make('first_name')
                            ->label('Jméno')
                            ->required(),
                        TextInput::make('last_name')
                            ->label('Příjmení')
                            ->required(),
                        TextInput::make('title')
                            ->label('Titul'),
                    ])
                    ->columns(3),
                Section::make('Profil')
                    ->schema([
                        Textarea::make('biography')
                            ->label('Životopis')
                            ->columnSpanFull(),
                        TextInput::make('photo')
                            ->label('Fotografie'),
                    ]),
            ]);
    }
}
