<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferenceVersionLocation extends Model
{
    protected $table = 'reference_version_locations';

    protected $fillable = ['location_id', 'reference_version_id', 'quantity', 'selling_price'];

    public $timestamps = false;
    
    protected $casts = [
        'selling_price' => 'float',
        'quantity' => 'int',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function referenceVersion()
    {
        return $this->belongsTo(ReferenceVersion::class);
    }
}
