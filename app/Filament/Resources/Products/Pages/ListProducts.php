<?php

namespace App\Filament\Resources\Products\Pages;

use App\Filament\Resources\Products\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProducts extends ListRecords
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Novo Produto')
                ->icon('heroicon-o-document-plus'),

            // Botão customizado 1
            /*
            Actions\Action::make('export')
                ->label('Exportar CSV')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('success')
                ->action(function () {
                    // Coloque aqui sua lógica de exportação
                    // Ex: gerar e baixar CSV
                }),
            */

            // Botão customizado 2
            Actions\Action::make('Composition')
                ->label('Composition')
                ->icon('heroicon-o-document-duplicate')
                ->color('info')
                ->url(fn () => ViewProduct::getUrl()),
                //->url(fn ($record) => ViewProduct::getUrl([$record->id]))
                //->openUrlInNewTab(),

            Actions\ActionGroup::make([
                Actions\Action::make('export')
                    ->label('Exportar CSV')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->color('success')
                    ->action(fn() => $this->notify('success', 'Exportação concluída!')),

                Actions\Action::make('import')
                    ->label('Importar Produtos')
                    ->icon('heroicon-o-arrow-up-tray')
                    ->color('info'),
                    //->url(route('products.import')),

                Actions\Action::make('report')
                    ->label('Gerar Relatório')
                    ->icon('heroicon-o-document-text')
                    ->color('warning')
                    ->action(fn() => $this->notify('info', 'Relatório gerado!')),
            ])
                ->label('Mais ações') // texto visível no dropdown
                ->icon('heroicon-o-cog-8-tooth')
                ->color('gray'),
        ];
    }
}
