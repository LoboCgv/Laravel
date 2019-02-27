<?php

namespace BodegaOnline;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
	protected $dates = ['deleted_at'];//se agrega esto es para hacer back

	
	/*Metodo para cambiar passwrd*/
	public function setPasswordAttribute($valor){
		if(!empty($valor)){
			$this->attributes['password']=\Hash::make($valor);		
		}
	}
}
