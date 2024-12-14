<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'prefix'];

    public $timestamps = false;

    public function references()
    {
        return $this->hasMany(Reference::class);
    }
}
