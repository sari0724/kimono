<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_user extends Model
{
    protected $fillable = [
        'company', 'email', 'password', 'img_name'
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function stories()   
    {
        return $this->hasMany('App\Story');  
    }
    
    public function service_outfits()   
    {
        return $this->hasMany('App\Service_outfit');  
    }
}
