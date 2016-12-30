<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['title', 'quantity', 'price', 'event_id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
