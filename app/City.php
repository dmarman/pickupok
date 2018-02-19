<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
    
    public function metadata()
    {
        return $this->hasOne('App\Metadata')->withDefault([
            'score' => '#',
            'cost' => '#'
        ]);
    }

    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }
    
}
