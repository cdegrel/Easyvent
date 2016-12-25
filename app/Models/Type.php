<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
