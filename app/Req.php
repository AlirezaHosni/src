<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Req extends Model
{
    public function identifier()
    {
        return $this->belongsTo(User::class, 'identifier_id');
    }
}
