<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function service_outfits_images()   
    {
        return $this->hasMany('App\Service_outfits_image');  
    }
}
