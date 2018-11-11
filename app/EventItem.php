<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventItem extends Model
{

    public function lineitemable() {
        return $this->morphMany(LineItem::class,'lineitemable');
    }
}
