<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContremarqueResource\Pages;
use App\Models\Contremarque;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ContremarqueResource extends Resource
{
    protected static ?string $model = Contremarque::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Gestion externe';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tile')
                    ->translateLabel()
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                Forms\Components\TextInput::make('slug')
                    ->translateLabel()
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('npass')
                    ->translateLabel()
                    ->required()
                    ->numeric(),

                Forms\Components\DatePicker::make('reprise')
                    ->translateLabel()
                    ->required(),

                Forms\Components\TextInput::make('typem')
                    ->translateLabel()
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('business_id')
                    ->relationship('business', 'name')
                    ->preload()
                    ->required()
                    ->native(false),

                Forms\Components\Select::make('subscription_id')
                    ->relationship('subscription', 'title')
                    ->preload()
                    ->required()
                    ->native(false),

                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'email')
                    ->preload()
                    ->required()
                    ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('npass')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('tile')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('typem')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('reprise')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContremarques::route('/'),
            'create' => Pages\CreateContremarque::route('/create'),
            'view' => Pages\ViewContremarque::route('/{record}'),
            'edit' => Pages\EditContremarque::route('/{record}/edit'),
        ];
    }
}
