<?php

namespace App\Filament\Resources\ContremarqueResource\Pages;

use App\Filament\Resources\ContremarqueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContremarque extends EditRecord
{
    protected static string $resource = ContremarqueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
