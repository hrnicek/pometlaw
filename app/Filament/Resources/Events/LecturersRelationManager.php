<?php

namespace App\Filament\Resources\Events;

use Filament\Actions\AttachAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class LecturersRelationManager extends RelationManager
{
    protected static ?string $title = 'Lektoři';

    protected static ?string $label = 'Lektor';

    protected static ?string $pluralLabel = 'Lektoři';

    protected static string $relationship = 'lecturers';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('full_name')
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->label('Celé jméno'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Titul'),
                Tables\Columns\TextColumn::make('biography')
                    ->label('Životopis')
                    ->limit(50),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                AttachAction::make()->preloadRecordSelect(),
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
