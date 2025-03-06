<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Supply extends Model
{
    /** @use HasFactory<\Database\Factories\SupplyFactory> */
    use HasFactory;

    public function supply_order(): BelongsTo
    {
        return $this->belongsTo(SupplyOrder::class);
    }
}
