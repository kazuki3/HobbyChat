<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    protected $fillable = [
        'message', 'user_id', 'image', 'room_id', 
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function room(){
        return $this->belongsTo('App\Room');
    }
}
