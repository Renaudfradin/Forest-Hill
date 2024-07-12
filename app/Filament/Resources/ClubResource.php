<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClubResource\Pages;
use App\Models\Club;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ClubResource extends Resource
{
    protected static ?string $model = Club::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Gestion externe';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->translateLabel()
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                Forms\Components\TextInput::make('slug')
                    ->translateLabel()
                    ->required()
                    ->maxLength(255),

                Forms\Components\MarkdownEditor::make('description')
                    ->translateLabel()
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\Select::make('activitys')
                    ->relationship('activitys', 'title')
                    //->multiple() @todo corection multiple ??
                    ->preload()
                    ->required()
                    ->native(false),

                Forms\Components\TextInput::make('planning')
                    ->translateLabel()
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('adress')
                    ->translateLabel()
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('location')
                    ->translateLabel()
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('location_detail')
                    ->translateLabel()
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('hourly')
                    ->translateLabel()
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('slug')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListClubs::route('/'),
            'create' => Pages\CreateClub::route('/create'),
            'view' => Pages\ViewClub::route('/{record}'),
            'edit' => Pages\EditClub::route('/{record}/edit'),
        ];
    }
}
