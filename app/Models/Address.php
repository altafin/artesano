<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['street'];
    public function client()
    {
        // Defines a many-to-one relationship: an address belongs to one client
        return $this->belongsTo(Client::class);
    }
}
