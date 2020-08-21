<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holidays extends Model
{
    protected $fillable = [
        'id', 'date_extense', 'date', 'week_day', 'week_day_index', 'mounth', 'mounth_index', 'year', 'description', 'type', 'ibge_code', 'initials', 'city', 'state', 'country', 'region',
    ];

}
