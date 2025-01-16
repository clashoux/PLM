<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RawMaterialStock extends Model
{
    protected $table = 'raw_materials_stock';

    protected $fillable = ['raw_material_id', 'supplier_id', 'quantity', 'price', 'purchase_date'];

    public $timestamps = false;

    public function rawMaterial()
    {
        return $this->belongsTo(RawMaterial::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

}
