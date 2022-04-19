<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Service_user extends Authenticatable
{
    use Notifiable;
    
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
