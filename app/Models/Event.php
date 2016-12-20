<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    public function eventable()
    {
        return $this->morphTo();
    }
}
