<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KeretaResource\Pages;
use App\Filament\Resources\KeretaResource\RelationManagers;
use App\Models\Kereta;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KeretaResource extends Resource
{
    protected static ?string $model = Kereta::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-vertical';

    protected static ?string $pluralModelLabel = 'Kereta';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('stasiun')->required()->placeholder('Masukkan Nama Perusahaan Penerbangan'),
                TextInput::make('lokasi')->required()->placeholder('Masukkan Lokasi Perusahaan Penerbangan'),
                TextInput::make('kontak')->columnSpanFull()->required()->placeholder('Masukkan Kontak Perusahaan Penerbangan')->maxLength(13),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('stasiun'),
                TextColumn::make('lokasi'),
                TextColumn::make('kontak'),
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
            'index' => Pages\ListKeretas::route('/'),
            'create' => Pages\CreateKereta::route('/create'),
            'edit' => Pages\EditKereta::route('/{record}/edit'),
        ];
    }
}
