<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_outfit_like extends Model
{
    protected $fillable = [
        'user_id', 'user_outfit_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function user_outfit()
    {
        return $this->belongsTo('App\User_outfit');
    }
}
