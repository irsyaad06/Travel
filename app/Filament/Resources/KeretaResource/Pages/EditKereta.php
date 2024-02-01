<?php

namespace App\Filament\Resources\KeretaResource\Pages;

use App\Filament\Resources\KeretaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKereta extends EditRecord
{
    protected static string $resource = KeretaResource::class;

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
