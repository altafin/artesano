<?php

namespace App\Filament\Resources\Products\Pages;

use App\Filament\Resources\Products\ProductResource;
use Filament\Resources\Pages\Page;

class ViewProduct extends Page
{

    protected static string $resource = ProductResource::class;

    protected string $view = 'filament.resources.products.pages.view-product';
}
