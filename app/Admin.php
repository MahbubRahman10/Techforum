<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
	protected $table ='blog_post';
	
    protected $fillable = [
         'username','password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
