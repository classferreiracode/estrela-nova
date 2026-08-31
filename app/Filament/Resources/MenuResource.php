<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Models\Menu;
use Filament\Actions;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationLabel = 'Menus';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('name')->label('Nome')->required(),
            Forms\Components\Select::make('location')->label('Local')->options(['header' => 'Cabeçalho', 'footer' => 'Rodapé'])->required()->unique(ignoreRecord: true),
            Forms\Components\Repeater::make('items')->label('Itens')->schema([
                Forms\Components\TextInput::make('label')->label('Texto')->required(),
                Forms\Components\TextInput::make('url')->label('URL')->required(),
                Forms\Components\Toggle::make('new_tab')->label('Abrir em nova aba'),
            ])->reorderable()->collapsible()->columnSpanFull(),
            Forms\Components\Toggle::make('is_active')->label('Ativo')->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->label('Nome'),
            Tables\Columns\TextColumn::make('location')->label('Local'),
            Tables\Columns\IconColumn::make('is_active')->label('Ativo')->boolean(),
        ])->actions([Actions\EditAction::make()]);
    }

    public static function getPages(): array
    {
        return ['index' => Pages\ListMenus::route('/'), 'create' => Pages\CreateMenu::route('/create'), 'edit' => Pages\EditMenu::route('/{record}/edit')];
    }
}
