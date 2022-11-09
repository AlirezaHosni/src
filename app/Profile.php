<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=['id'];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function city()
    {
        return $this->belongsTo(City::class,'city_id');
    }
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}

