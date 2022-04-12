<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_outfit_image_like extends Model
{
    protected $fillable = [
        'user_id', 'service_outfit_image_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function service_outfit_image()
    {
        return $this->belongsTo('App\Service_outfit_image');
    }
}
