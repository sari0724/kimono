<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_outfit extends Model
{
   
    use SoftDeletes;
    
    protected $attributes = [
    'user_id' => 1,
    ];
    
    protected $fillable = [
        'title', 'content', 'img_name', 'user_id'
    ];
    
    public function getPaginateByLimit(int $limit_count = 3)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
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
