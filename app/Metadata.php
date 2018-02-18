<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    protected $hidden = [
        'city_id',
    ];

    protected $fillable = [
        'city_id'
    ];

    public function getScoreAttribute($value)
    {
        if($value === NULL || $value === '#'){
            return '#';
        } else {
            return round($value);
        }
    }

    public function getCostAttribute($value)
    {
        if($value === NULL || $value === '#'){
            return '#';
        } else {
            return round($value);
        }
    }

    public function getGirlsAttribute($value)
    {
            return round($value);
    }

    public function getClubsAttribute($value)
    {
        return round($value);
    }

    public function getBarsAttribute($value)
    {
        return round($value);
    }

    public function getLogisticsAttribute($value)
    {
        return round($value);
    }

}
