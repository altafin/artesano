<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function relatedProducts()
    {
        return $this->belongsToMany(Product::class, 'product_product', 'product_id', 'composition_id');
    }

    public function hasComposition(): bool
    {
        return $this->relatedProducts()->count() > 0;
    }

    public function inverseRelatedProducts()
    {
        return $this->belongsToMany(Product::class, 'product_product', 'composition_id', 'product_id');
    }
}
