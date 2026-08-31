<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Actions;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationLabel = 'Páginas';

    protected static ?string $modelLabel = 'página';

    protected static ?string $pluralModelLabel = 'páginas';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('title')->label('Título')->required()->maxLength(255),
            Forms\Components\TextInput::make('slug')->required()->unique(ignoreRecord: true)->helperText('Endereço da página, sem espaços. Ex.: politica-de-privacidade'),
            Forms\Components\Select::make('template')->label('Modelo')->options(['default' => 'Página padrão'])->default('default')->required(),
            Forms\Components\TextInput::make('hero_title')->label('Título do destaque'),
            Forms\Components\Textarea::make('hero_subtitle')->label('Texto do destaque'),
            Forms\Components\FileUpload::make('hero_image')->label('Imagem de destaque')->image()->directory('pages'),
            Forms\Components\RichEditor::make('content')->label('Conteúdo')->columnSpanFull(),
            Forms\Components\TextInput::make('seo_title')->label('Título para buscadores')->maxLength(60),
            Forms\Components\Textarea::make('seo_description')->label('Descrição para buscadores')->maxLength(160),
            Forms\Components\Toggle::make('is_published')->label('Publicada')->default(false),
            Forms\Components\DateTimePicker::make('published_at')->label('Publicar em'),
            Forms\Components\TextInput::make('order')->label('Ordem')->numeric()->default(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->label('Título')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('slug')->searchable(),
            Tables\Columns\IconColumn::make('is_published')->label('Publicada')->boolean(),
            Tables\Columns\TextColumn::make('updated_at')->label('Atualizada')->dateTime('d/m/Y H:i')->sortable(),
        ])->actions([Actions\EditAction::make()])
            ->bulkActions([Actions\BulkActionGroup::make([Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return ['index' => Pages\ListPages::route('/'), 'create' => Pages\CreatePage::route('/create'), 'edit' => Pages\EditPage::route('/{record}/edit')];
    }
}
