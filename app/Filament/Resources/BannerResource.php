<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Galeri Sekolah';

    public static function form(Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('title')
                ->label('Judul Banner')
                ->required(),
            FileUpload::make('image')
                ->label('Gambar Banner')
                ->directory('banners')
                ->disk('public')
                ->image()
                ->required(),
            DatePicker::make('start_date')
                ->label('Tanggal Mulai')
                ->required(),
            DatePicker::make('end_date')
                ->label('Tanggal Berakhir')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            ImageColumn::make('image')
                ->label('Gambar')
                ->url(fn ($record) => asset('storage/banners/' . $record->image)),
            TextColumn::make('title')->label('Judul'),
            TextColumn::make('start_date')->label('Tanggal Mulai'),
            TextColumn::make('end_date')->label('Tanggal Berakhir'),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
            'view' => Pages\ViewBanner::route('/{record}'),
        ];
    }
}