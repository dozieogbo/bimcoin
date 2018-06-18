<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailToken extends Model
{
    protected $dates = ['expires_at'];

    protected $fillable = [
        'token',
        'id',
        'expires_at'
    ];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User', 'id');
    }
}
