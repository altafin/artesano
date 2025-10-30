<?php

namespace App\Filament\Resources\Categories\Pages;

use App\Filament\Resources\Categories\CategoriesResource;
use SolutionForest\FilamentTree\Resources\Pages\TreePage;

class CategoryTree extends TreePage
{
    protected static string $resource = CategoriesResource::class;

    protected static int $maxDepth = 2;

    public function getTreeRecordTitle(?\Illuminate\Database\Eloquent\Model $record = null): string
    {
        if (!$record) return '';

        return "[{$record->id}] {$record->name}";
    }

    protected function getTreeToolbarActions(): array
    {
        return [];
    }

    protected function getActions(): array
    {
        return [
            $this->getCreateAction(),
            // SAMPLE CODE, CAN DELETE
            //\Filament\Pages\Actions\Action::make('sampleAction'),
        ];
    }

    protected function hasDeleteAction(): bool
    {
        return false;
    }

    protected function hasEditAction(): bool
    {
        return true;
    }

    protected function hasViewAction(): bool
    {
        return false;
    }

    protected function getHeaderWidgets(): array
    {
        return [];
    }

    protected function getFooterWidgets(): array
    {
        return [];
    }

    public function getTreeRecordIcon(?\Illuminate\Database\Eloquent\Model $record = null): ?string
    {
        if ($record->parent_id != -1) {
            return null; // No icon for child records
        }

        return match ($record->title) {
            'Categories' => 'heroicon-o-tag',
            'Products' => 'heroicon-o-shopping-bag',
            'Settings' => 'heroicon-o-cog',
            default => 'heroicon-o-folder',
        };
    }
}
