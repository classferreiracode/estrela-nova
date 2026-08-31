<?php

namespace App\Filament\Resources;

use App\Models\Member;
use App\Filament\Resources\MemberResource\Pages;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\Select::make('member_group_id')
                    ->relationship('group', 'title'),
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('role'),
                Forms\Components\FileUpload::make('avatar')
                    ->image()
                    ->directory('avatars')
                    ->maxSize(2048),
                Forms\Components\TextInput::make('order')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('role'),
                Tables\Columns\TextColumn::make('group.title'),
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}
