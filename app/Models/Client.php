<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public function address()
    {
        // Defines a one-to-many relationship: a client has many addresses
        return $this->hasOne(Address::class);
    }
}
