<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberGroupResource\Pages;
use App\Models\MemberGroup;
use Filament\Actions;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class MemberGroupResource extends Resource
{
    protected static ?string $model = MemberGroup::class;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\TextInput::make('order')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('members_count')
                    ->counts('members'),
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
            'index' => Pages\ListMemberGroups::route('/'),
            'create' => Pages\CreateMemberGroup::route('/create'),
            'edit' => Pages\EditMemberGroup::route('/{record}/edit'),
        ];
    }
}
