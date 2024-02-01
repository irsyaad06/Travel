<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenerbanganResource\Pages;
use App\Filament\Resources\PenerbanganResource\RelationManagers;
use App\Models\Penerbangan;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenerbanganResource extends Resource
{
    protected static ?string $model = Penerbangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static ?string $pluralModelLabel = 'Penerbangan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('perusahaan')->required()->placeholder('Masukkan Nama Perusahaan Penerbangan'),
                TextInput::make('lokasi')->required()->placeholder('Masukkan Lokasi Perusahaan Penerbangan'),
                TextInput::make('kontak')->columnSpanFull()->required()->placeholder('Masukkan Kontak Perusahaan Penerbangan')->maxLength(13),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('perusahaan')->searchable(),
                TextColumn::make('lokasi')->searchable(),
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
            'index' => Pages\ListPenerbangans::route('/'),
            'create' => Pages\CreatePenerbangan::route('/create'),
            'edit' => Pages\EditPenerbangan::route('/{record}/edit'),
        ];
    }
}
