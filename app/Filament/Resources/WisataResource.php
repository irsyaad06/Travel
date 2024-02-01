<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WisataResource\Pages;
use App\Filament\Resources\WisataResource\RelationManagers;
use App\Models\Wisata;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WisataResource extends Resource
{
    protected static ?string $model = Wisata::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-europe-africa';

    protected static ?string $pluralModelLabel = 'Wisata';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('wisata')->required()->placeholder('Masukkan Nama Tempat Wisata'),
                TextInput::make('lokasi')->required()->placeholder('Masukkan Lokasi Tempat Wisata'),
                Select::make('jenis')->required()->placeholder('Masukkan Jenis Wisata')
                    ->options([
                        'Pantai' => 'Pantai',
                        'Gunung' => 'Gunung',
                        'Hutan/Cagar Alam' => 'Hutan/Cagar Alam',
                        'Monumen' => 'Monumen',
                        'Sungai' => 'Sungai',
                    ])->columnSpanFull(),
                TextInput::make('kontak')->columnSpanFull()->required()->placeholder('Masukkan Kontak Tempat Wisata')->maxLength(13),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('wisata')->searchable(),
                TextColumn::make('lokasi')->searchable(),
                TextColumn::make('jenis')->searchable(),
                TextColumn::make('kontak')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWisatas::route('/'),
            'create' => Pages\CreateWisata::route('/create'),
            'edit' => Pages\EditWisata::route('/{record}/edit'),
        ];
    }
}
