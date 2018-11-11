<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineItem extends Model
{
    public function lineitemable()
    {
        return $this->morphTo('lineitemable');
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
