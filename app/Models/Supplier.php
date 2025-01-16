<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    protected $fillable = ['name', 'address', 'phone', 'email', 'contact_person'];

    public $timestamps = false;

    public function rawMaterialStocks()
    {
        return $this->hasMany(RawMaterialStock::class);
    }

}
