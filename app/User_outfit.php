<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_outfit extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function user_outfit_like()
    {
        // Profileモデルのデータを引っ張てくる
        return $this->hasOne('App\User_outfit_like');
    }
}
