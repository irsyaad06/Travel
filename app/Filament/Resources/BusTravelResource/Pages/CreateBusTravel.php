<?php

namespace App\Filament\Resources\BusTravelResource\Pages;

use App\Filament\Resources\BusTravelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBusTravel extends CreateRecord
{
    protected static string $resource = BusTravelResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
