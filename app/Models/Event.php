<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'address', 'city', 'postal_code', 'country', 'start_date', 'end_date', 'description', 'organizer_id', 'category_id', 'type_id'];

    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
