<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title', 'direction', 'location', 'description',
        'price', 'state_property', 'size_property', 
        'bedroom', 'bathroom', 'garage', 
        'latitude_map', 'longitude_map', 'amenities', 'profile_picture'
    ];
}
