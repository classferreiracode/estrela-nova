<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaAssetResource\Pages;
use App\Models\MediaAsset;
use Filament\Actions;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class MediaAssetResource extends Resource
{
    protected static ?string $model = MediaAsset::class;

    protected static ?string $navigationLabel = 'Biblioteca de mídia';

    protected static ?string $modelLabel = 'arquivo';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('name')->label('Nome')->required(),
            Forms\Components\FileUpload::make('file')->label('Arquivo')->directory('media')->required()->preserveFilenames(),
            Forms\Components\TextInput::make('alt_text')->label('Texto alternativo'),
            Forms\Components\TextInput::make('mime_type')->label('Tipo MIME')->helperText('Opcional; ex.: image/jpeg ou application/pdf'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->label('Nome')->searchable(),
            Tables\Columns\TextColumn::make('file')->label('Arquivo')->limit(50),
            Tables\Columns\TextColumn::make('updated_at')->label('Atualizado')->dateTime('d/m/Y H:i'),
        ])->actions([Actions\EditAction::make()])
            ->bulkActions([Actions\BulkActionGroup::make([Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return ['index' => Pages\ListMediaAssets::route('/'), 'create' => Pages\CreateMediaAsset::route('/create'), 'edit' => Pages\EditMediaAsset::route('/{record}/edit')];
    }
}
