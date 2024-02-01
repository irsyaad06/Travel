<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BusTravelResource\Pages;
use App\Filament\Resources\BusTravelResource\RelationManagers;
use App\Models\BusTravel;
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

class BusTravelResource extends Resource
{
    protected static ?string $model = BusTravel::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $pluralModelLabel = 'Bus/Travel';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('terminal')->required()->placeholder('Masukkan Nama Terminal')->label('Nama Terminal Bus/Travel'),
                TextInput::make('lokasi')->required()->placeholder('Masukkan Lokasi Terminal'),
                Select::make('jenis')->required()->placeholder('Masukkan Jenis Kendaraan')
                    ->options([
                        'Bus' => 'Bus',
                        'Travel' => 'Travel',
                    ])->columnSpanFull(),
                TextInput::make('kontak')->columnSpanFull()->required()->placeholder('Masukkan Kontak Terminal')->maxLength(13),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('terminal')->searchable(),
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
            'index' => Pages\ListBusTravel::route('/'),
            'create' => Pages\CreateBusTravel::route('/create'),
            'edit' => Pages\EditBusTravel::route('/{record}/edit'),
        ];
    }
}
