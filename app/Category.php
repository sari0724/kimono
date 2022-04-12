<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function service_outfit_images()   
    {
        return $this->hasMany('App\Service_outfit_image');  
    }
}
