<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    public function comment()
    {
        // Profileモデルのデータを引っ張てくる
        return $this->hasOne('App\Comment');
    }
    
    public function story_likes()   
    {
        return $this->hasMany('App\Story_like');  
    }
    
    public function service_user()
    {
        return $this->belongsTo('App\Service_user');
    }
}
