<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['name', 'first_name', 'address', 'postal_code', 'city', 'country', 'phone', 'mobile_phone', 'sex', 'avatar'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
