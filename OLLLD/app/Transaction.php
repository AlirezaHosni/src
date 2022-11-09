<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    

    public function wallet()
    {
        return $this->belongsTo(Wallet::class, 'wallet_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
    public function pay()
    {
        return $this->belongsTo(Pay::class, 'order_id');
    }

}
