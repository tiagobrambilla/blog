<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'tipo'
    ];

protected $hidden = [
        'password', 'remember_token',
    ];

    public function comentario(){
        return $this->hasMany(Comentario::class);
    }
}
