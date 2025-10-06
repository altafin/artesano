<?php

namespace App\Filament\Resources\Products\Schemas;

use CodeWithDennis\FilamentSelectTree\SelectTree;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
            ,
                TextInput::make('price')
                    ->numeric()
                    ->suffix('R$')
            ,
                Textarea::make('description')
            ,
                SelectTree::make('category_id')
                    ->label('Category')
                    ->withCount()
                    ->searchable()
                    ->placeholder('Selecione uma categoria')
                    ->relationship('category', 'name', 'parent_id')
            ]);
    }
}
