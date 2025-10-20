<?php

namespace App\Filament\Resources\Products\Tables;

use App\Filament\Resources\Products\Pages\ViewProduct;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('category.name')->searchable(),
                TextColumn::make('price')->numeric(),
                TextColumn::make('Type')
                    ->getStateUsing(function ($record): string {
                        return $record->relatedProducts()->count() > 0 ? 'Composto' : 'Simples';
                    }),
                //TextColumn::make('total')->counts('relatedProducts')
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                /*
                Action::make('composition')
                    ->label('Composition')
                    ->icon('heroicon-o-document-duplicate')
                    ->url(fn () => ViewProduct::getUrl())
                    ->openUrlInNewTab(false),
            */
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
