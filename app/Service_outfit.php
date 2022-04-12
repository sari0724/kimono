<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_outfit extends Model
{
    protected $fillable = [
        'title', 'content', 'service_outfit_id'
    ];
    
    public function service_user()
    {
        return $this->belongsTo('App\Service_user');
    }
    
    Public function service_outfits_image()
    {
        // Profileモデルのデータを引っ張てくる
        return $this->hasOne('App\Service_outfits_image');
    }
}
