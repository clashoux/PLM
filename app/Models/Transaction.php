<?php

namespace App\Models;

use App\Http\Type;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $fillable = [
        'reference_version_location_id',
        'type',
        'quantity',
        'unit_price',
        'date',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public $timestamps = false;

    public function referenceVersionLocation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ReferenceVersionLocation::class);
    }


}
