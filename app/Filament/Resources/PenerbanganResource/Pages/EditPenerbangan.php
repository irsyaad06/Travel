<?php

namespace App\Filament\Resources\PenerbanganResource\Pages;

use App\Filament\Resources\PenerbanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenerbangan extends EditRecord
{
    protected static string $resource = PenerbanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
