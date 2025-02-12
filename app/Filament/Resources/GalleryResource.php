<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Card;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Galeri Sekolah';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Card::make([
                    TextInput::make('title')
                        ->label('Judul')
                        ->required()
                        ->maxLength(255),

                    Textarea::make('description')
                        ->label('Deskripsi')
                        ->nullable(),

                    FileUpload::make('images')
                        ->label('Gambar')
                        ->multiple()
                        ->image()
                        ->directory('galleries') 
                        ->disk('public')
                        ->reorderable()
                        ->preserveFilenames()
                        ->columnSpanFull(),
                ]),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),

                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50),

                ImageColumn::make('images')
                    ->label('Gambar')
                    ->size(100)  
                    ->disk('public')
                    ->getStateUsing(fn ($record) => $record->images ? asset('storage/' . $record->images[0]) : null)
                    ->square(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
            'view' => Pages\ViewGallery::route('/{record}'),
        ];
    }
}