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
    
    public function venues()
    {
        return $this->hasMany('App\Venue');
    }

    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }

    public function getHousingAttribute($value)
    {
        return round($value);
    }

    public function getCostOfLivingAttribute($value)
    {
        return round($value);
    }

    public function getTravelConnectivityAttribute($value)
    {
        return round($value);
    }

    public function getSafetyAttribute($value)
    {
        return round($value);
    }

    public function getHealthcareAttribute($value)
    {
        return round($value);
    }

    public function getInternetAccessAttribute($value)
    {
        return round($value);
    }

    public function getEnvironmentQualityAttribute($value)
    {
        return round($value);
    }
}
