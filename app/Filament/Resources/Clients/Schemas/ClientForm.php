<?php

namespace App\Filament\Resources\Clients\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Schema;

class ClientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
            ,
                Group::make()
                    ->relationship('address')
                    ->schema([
                        TextInput::make('street')
                            ->required()
                    ])

            ]);
    }
}
