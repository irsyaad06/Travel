<?php

namespace App\Filament\Resources\KeretaResource\Pages;

use App\Filament\Resources\KeretaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKereta extends CreateRecord
{
    protected static string $resource = KeretaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
