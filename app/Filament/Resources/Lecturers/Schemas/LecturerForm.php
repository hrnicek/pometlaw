<?php

namespace App\Filament\Resources\Lecturers\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LecturerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->label('Jméno')
                    ->required(),
                TextInput::make('last_name')
                    ->label('Příjmení')
                    ->required(),
                TextInput::make('title')
                    ->label('Titul'),
                Textarea::make('biography')
                    ->label('Životopis')
                    ->columnSpanFull(),
                TextInput::make('photo')
                    ->label('Fotografie'),
            ]);
    }
}
