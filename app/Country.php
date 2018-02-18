<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function getBmiAttribute($value)
    {
        return round($value);
    }
}
