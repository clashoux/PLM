<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';

    protected $fillable = ['name', 'city_id', 'type'];

    public $timestamps = false;

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    // Type is enum
    public function type()
    {
        return $this->enum('type', ['Factory', 'Warehouse', 'Selling Point']);
    }

    public function referenceVersionLocations()
    {
        return $this->hasMany(ReferenceVersionLocation::class);
    }

}
