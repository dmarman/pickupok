<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    public function getScoreAttribute($value)
    {
        return round($value);
    }
}
