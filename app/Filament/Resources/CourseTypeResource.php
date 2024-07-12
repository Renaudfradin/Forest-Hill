<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseTypeResource\Pages;
use App\Models\Course_type;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CourseTypeResource extends Resource
{
    protected static ?string $model = Course_type::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Gestion externe';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCourseTypes::route('/'),
            'create' => Pages\CreateCourseType::route('/create'),
            'view' => Pages\ViewCourseType::route('/{record}'),
            'edit' => Pages\EditCourseType::route('/{record}/edit'),
        ];
    }
}
