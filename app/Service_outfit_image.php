<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_outfit_image extends Model
{
    protected $fillable = [
        'description', 'img_name', 'ec_id', 'all_id', 'service_outfit_id', 'category_id'
    ];
    
    public function service_outfit()
    {
        return $this->belongsTo('App\Service_outfit');
    }
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    public function service_outfit_image_likes()   
    {
        return $this->hasMany('App\Service_outfit_image_like');  
    }
}
