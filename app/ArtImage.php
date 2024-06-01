<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArtImage extends Model
{
    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class,  'item_id', 'id');
    }
}
