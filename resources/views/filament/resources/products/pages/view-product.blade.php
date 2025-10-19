<?php
use App\Models\Product;
    $product = Product::find(2);
    if ($product->hasComposition()) {
        echo 'S';
    } else {
        echo 'N';
    }
    dd($product);
?>
<x-filament-panels::page>
    {{-- Page content --}}
</x-filament-panels::page>
