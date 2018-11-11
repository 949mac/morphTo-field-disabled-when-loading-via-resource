<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function line_items()
    {
        return $this->hasMany(LineItem::class);
    }
}
