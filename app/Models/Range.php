<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Range extends Model
{
    protected $table = 'ranges';

    protected $fillable = ['name', 'prefix'];

    public $timestamps = false;

    public function references()
    {
        return $this->hasMany(Reference::class);
    }
}
