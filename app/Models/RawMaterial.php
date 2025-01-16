<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
    protected $table = 'raw_materials';

    protected $fillable = ['name'];

    public $timestamps = false;

}
