<?php

namespace App\Filament\Resources\Events;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class EventCategoryRelationManager extends RelationManager
{
    protected static ?string $title = 'Kategorie události';

    protected static ?string $label = 'Kategorie události';

    protected static ?string $pluralLabel = 'Kategorie událostí';

    protected static string $relationship = 'eventCategory';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Název'),
                Tables\Columns\TextColumn::make('description')
                    ->label('Popis'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
