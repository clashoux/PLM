<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferenceVersion extends Model
{
    protected $table = 'reference_versions';

    protected $fillable = ['name','reference_id', 'is_in_sales', 'production_price'];

    public $timestamps = false;

    protected $casts = [
        'is_in_sales' => 'boolean',
        'production_price' => 'float',
    ];

    public function reference()
    {
        return $this->belongsTo(Reference::class);
    }

    public function referenceVersionsLocations()
    {
        return $this->hasMany(ReferenceVersionLocation::class);
    }

    public function getPrefix(){
        return $this->reference->getPrefix() .'-'. $this->name.'.'.$this->id;
    }
}
