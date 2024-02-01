<?php

namespace App\Filament\Resources\BusTravelResource\Pages;

use App\Filament\Resources\BusTravelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBusTravel extends EditRecord
{
    protected static string $resource = BusTravelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
