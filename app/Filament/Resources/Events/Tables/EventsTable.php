<?php

namespace App\Filament\Resources\Events\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Název')
                    ->searchable(),
                TextColumn::make('event_date')
                    ->label('Datum události')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('capacity')
                    ->label('Kapacita')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Cena')
                    ->money('CZK')
                    ->sortable(),
                TextColumn::make('location')
                    ->label('Místo')
                    ->searchable(),
                TextColumn::make('eventCategory.name')
                    ->label('Kategorie')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Vytvořeno')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Aktualizováno')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
