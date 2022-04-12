<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content', 'user_id', 'story_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function story()
    {
        return $this->belongsTo('App\Story');
    }
}
