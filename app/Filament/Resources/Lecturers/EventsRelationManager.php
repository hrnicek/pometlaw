<?php

namespace App\Filament\Resources\Lecturers;

use Filament\Actions\AttachAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class EventsRelationManager extends RelationManager
{
    protected static ?string $title = 'Události';

    protected static ?string $label = 'Událost';

    protected static ?string $pluralLabel = 'Události';

    protected static string $relationship = 'events';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Název'),
                Tables\Columns\TextColumn::make('datetime_from')
                    ->label('Začátek')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('capacity')
                    ->label('Kapacita'),
                Tables\Columns\TextColumn::make('price')
                    ->label('Cena')
                    ->money('CZK'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                AttachAction::make(),
            ])
            ->recordActions([
                DetachAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DetachBulkAction::make(),
                ]),
            ]);
    }
}
