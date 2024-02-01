<?php

namespace App\Filament\Resources\PenerbanganResource\Pages;

use App\Filament\Resources\PenerbanganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenerbangans extends ListRecords
{
    protected static string $resource = PenerbanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
