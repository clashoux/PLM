<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $table = 'references';

    protected $fillable = ['name', 'prefix', 'product_id', 'range_id'];

    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function range()
    {
        return $this->belongsTo(Range::class);
    }

    public function referenceVersions()
    {
        return $this->hasMany(ReferenceVersion::class, 'reference_id', 'id');
    }

    public function getPrefix(){
        return $this->product->prefix .'-'. $this->range->prefix .'-'. $this->prefix;
    }
}
