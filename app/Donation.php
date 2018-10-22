<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
        'ref_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
