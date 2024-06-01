<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    protected $fillable = ['rider_id', 'user_id', 'rating'];

    public function rider()
    {
        return $this->belongsTo(Riders::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
