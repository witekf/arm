<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
     

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['login', 'name', 'surname', 'password', 'user_type_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be mutated for dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    //w modelu musimy odwzorować relacje z bazy
    public function user_type() //pole o takiej nazwie
    {
        return $this->belongsTo('App\UserType', 'user_type_id', 'id'); //zwroci obiekt z tabeli obslugiwanej przez model UserType
    }

}
