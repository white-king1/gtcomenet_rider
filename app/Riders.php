<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riders extends Model
{
    protected $fillable = ['name'];

    public function ratings()
    {
        return $this->hasMany(Ratings::class);
    }

    public function averageRating()
    {
        return $this->ratings()->avg('rating');
    }
}
