<?php

namespace App\Filament\Resources;

use App\Models\TimelineEvent;
use App\Filament\Resources\TimelineEventResource\Pages;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class TimelineEventResource extends Resource
{
    protected static ?string $model = TimelineEvent::class;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\TextInput::make('year')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('timeline'),
                Forms\Components\Textarea::make('text')
                    ->required(),
                Forms\Components\TextInput::make('order')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('year'),
                Tables\Columns\TextColumn::make('text')
                    ->limit(50),
                Tables\Columns\TextColumn::make('order'),
            ])
            ->filters([])
            ->actions([
                Actions\EditAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTimelineEvents::route('/'),
            'create' => Pages\CreateTimelineEvent::route('/create'),
            'edit' => Pages\EditTimelineEvent::route('/{record}/edit'),
        ];
    }
}
