<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

     protected $fillable=['name', 'email','password'];

     public static $rules=[
       //'email' => 'required|email|unique:users,email',
       'name'=>'required',
       'email'=>'required',
       'password'=>'required',
     ];



      public static $messages=['required'=>'*esse campo é obrigatório',
      //'email.*'=>'email inválido, não esqueça o @',

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
