<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\EventDispatcher\Event;

class Organizer extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
