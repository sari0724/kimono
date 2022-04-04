<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_user extends Model
{
    public function stories()   
    {
        return $this->hasMany('App\Story');  
    }
    
    public function service_outfits()   
    {
        return $this->hasMany('App\Service_outfit');  
    }
}
