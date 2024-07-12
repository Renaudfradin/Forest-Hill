<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ContremarqueRelationManager extends RelationManager
{
    protected static string $relationship = 'contremarque';

    public function form(Form $form): Form
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

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
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
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
