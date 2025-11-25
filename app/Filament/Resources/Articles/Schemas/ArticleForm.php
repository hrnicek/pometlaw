<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DateTimePicker;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Základní informace')
                    ->schema([
                        TextInput::make('title')
                            ->label('Název')
                            ->required(),
                        Textarea::make('perex')
                            ->label('Perex')
                            ->columnSpanFull(),
                        Textarea::make('content')
                            ->label('Obsah')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                Section::make('Publikace')
                    ->schema([
                        Toggle::make('is_published')
                            ->label('Publikováno'),
                        DateTimePicker::make('published_at')
                            ->label('Publikováno od'),
                    ])
                    ->columns(2),
            ]);
    }
}
