<?php

namespace App\Filament\Resources\BusTravelResource\Pages;

use App\Filament\Resources\BusTravelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBusTravel extends ListRecords
{
    protected static string $resource = BusTravelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
