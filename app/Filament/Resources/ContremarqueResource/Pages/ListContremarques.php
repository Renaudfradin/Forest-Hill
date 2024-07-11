<?php

namespace App\Filament\Resources\ContremarqueResource\Pages;

use App\Filament\Resources\ContremarqueResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContremarques extends ListRecords
{
    protected static string $resource = ContremarqueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
