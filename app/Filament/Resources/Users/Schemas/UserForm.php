<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Účet')
                    ->schema([
                        TextInput::make('name')
                            ->label('Jméno')
                            ->required(),
                        TextInput::make('email')
                            ->label('E‑mail')
                            ->email()
                            ->required(),
                    ])
                    ->columns(2),
                Section::make('Bezpečnost')
                    ->schema([
                        DateTimePicker::make('email_verified_at')
                            ->label('E‑mail ověřen'),
                        TextInput::make('password')
                            ->label('Heslo')
                            ->password()
                            ->required(),
                    ])
                    ->columns(2),
            ]);
    }
}
