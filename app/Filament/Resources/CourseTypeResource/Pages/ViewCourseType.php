<?php

namespace App\Filament\Resources\CourseTypeResource\Pages;

use App\Filament\Resources\CourseTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCourseType extends ViewRecord
{
    protected static string $resource = CourseTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
