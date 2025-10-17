<?php
use App\Models\Product;
    $product = Product::find(1);
    dd($product->relatedProducts);
?>
<x-filament-panels::page>
    {{-- Page content --}}
</x-filament-panels::page>
