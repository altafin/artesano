<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentTree\Concern\ModelTree;

class Category extends Model
{
    use HasFactory;
    use ModelTree;

    protected $fillable = ['parent_id', 'name', 'order'];

    protected $casts = [
        'parent_id' => 'integer'
    ];

    public function parent()
    {
        return $this->belongsTo(self::class);
    }
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function product()
    {
        return$this->hasOne(Product::class);
    }

}
