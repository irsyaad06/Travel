<?php

namespace App\Filament\Resources\KeretaResource\Pages;

use App\Filament\Resources\KeretaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKeretas extends ListRecords
{
    protected static string $resource = KeretaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
