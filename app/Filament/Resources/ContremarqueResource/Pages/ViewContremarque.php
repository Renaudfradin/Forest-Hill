<?php

namespace App\Filament\Resources\ContremarqueResource\Pages;

use App\Filament\Resources\ContremarqueResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewContremarque extends ViewRecord
{
    protected static string $resource = ContremarqueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
