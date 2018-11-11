<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationType extends Model
{
    public function lineitemable()
    {
        return $this->morphMany(LineItem::class, 'lineitemable');
    }
}
