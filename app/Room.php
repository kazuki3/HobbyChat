<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_name', 'category', 'thumbnail', 'admnistrator_id', 
    ];

    public function user(){
        return $this->hasOne('App\User');
    }
}
