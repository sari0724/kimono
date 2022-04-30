<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_outfit extends Model
{
   
    use SoftDeletes;
    
    protected $fillable = [
        'title', 'content', 'img_name', 'user_id'
    ];
    
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
