<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function user_outfits()   
    {
        return $this->hasMany('App\User_outfit');  
    }
    
    public function user_outfit_likes()   
    {
        return $this->hasMany('App\User_outfit_like');  
    }
    
    public function comments()   
    {
        return $this->hasMany('App\Comment');  
    }
    
    public function story_likes()   
    {
        return $this->hasMany('App\Story_like');  
    }
    
    public function service_outfit_image_likes()   
    {
        return $this->hasMany('App\Service_outfit_image_like');  
    }
}
