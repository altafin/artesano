<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public function addresses()
    {
        // Defines a one-to-many relationship: a client has many addresses
        return $this->hasMany(Address::class);
    }
}
