<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CtaResource\Pages;
use App\Models\Cta;
use Filament\Actions;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class CtaResource extends Resource
{
    protected static ?string $model = Cta::class;

    protected static ?string $navigationLabel = 'Chamadas para ação';

    protected static ?string $modelLabel = 'CTA';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('name')->label('Nome interno')->required(),
            Forms\Components\TextInput::make('label')->label('Texto do botão')->required(),
            Forms\Components\TextInput::make('url')->label('URL')->required(),
            Forms\Components\Select::make('location')->label('Local')->options(['floating' => 'Botão flutuante', 'header' => 'Cabeçalho', 'content' => 'Conteúdo', 'footer' => 'Rodapé'])->required(),
            Forms\Components\Select::make('style')->label('Estilo')->options(['primary' => 'Primário', 'secondary' => 'Secundário', 'whatsapp' => 'WhatsApp'])->default('primary'),
            Forms\Components\TextInput::make('icon')->label('Ícone Feather'),
            Forms\Components\Toggle::make('open_in_new_tab')->label('Abrir em nova aba'),
            Forms\Components\Toggle::make('is_active')->label('Ativo')->default(true),
            Forms\Components\DateTimePicker::make('starts_at')->label('Início da exibição'),
            Forms\Components\DateTimePicker::make('ends_at')->label('Fim da exibição'),
            Forms\Components\TextInput::make('order')->label('Ordem')->numeric()->default(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->label('Nome')->searchable(),
            Tables\Columns\TextColumn::make('label')->label('Texto'),
            Tables\Columns\TextColumn::make('location')->label('Local'),
            Tables\Columns\IconColumn::make('is_active')->label('Ativo')->boolean(),
        ])->actions([Actions\EditAction::make()])
            ->bulkActions([Actions\BulkActionGroup::make([Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return ['index' => Pages\ListCtas::route('/'), 'create' => Pages\CreateCta::route('/create'), 'edit' => Pages\EditCta::route('/{record}/edit')];
    }
}
