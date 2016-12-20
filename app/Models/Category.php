<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function event()
    {
        return $this->morphMany(Event::class, 'eventable');
    }
}
