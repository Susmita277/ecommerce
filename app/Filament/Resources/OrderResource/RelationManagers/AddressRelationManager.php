<?php
namespace App\Filament\Resources\OrderResource\RelationManagers;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Forms\Form;
use Filament\Tables\Table;

class AddressRelationManager extends RelationManager
{
    protected static string $relationship = 'address'; // Must match your model relationship name

    public function form(Form $form): Form
    {
        return $form
            ->schema([
               TextInput::make('city')
               ->required()
               ->maxlength(200),
               TextInput::make('street_address')
               ->required()
               ->maxlength(200),
               TextInput::make('phone')
               ->required()
               ->maxlength(20),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('city')
                ->label('City'),
                TextColumn::make('street_address')
                ->label('Street Address'),
                TextColumn::make('phone')
                ->label('Phone'),
            ]);
    }
}