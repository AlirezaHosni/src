<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodBuy extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
