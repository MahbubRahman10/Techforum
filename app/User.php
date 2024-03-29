<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Notifications\Notifiable;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
	 use Authenticatable, CanResetPassword;
    use Notifiable;
	protected $table = 'users';
    
	protected $fillable = [
        'name','username', 'email', 'password','repassword','token'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
	
	
	 public static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->token = str_random(30);
        });
    }
	
	 public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
		$this->attributes['repassword'] = bcrypt($password);
    }
	
	
	
	 public function confirmEmail()
    {
        $this->verified = true;
        $this->token = null;
        $this->save();
    }
}
