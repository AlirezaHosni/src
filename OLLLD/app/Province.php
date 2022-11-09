<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}

