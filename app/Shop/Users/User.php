<?php

namespace App\Shop\Users;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
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
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
    // function roles(){ //1изм
    //     return $this->belongsToMany('App\Shop\Users\Role', 'user_roles', 'user_id', 'role_id');//зная пользователя получить список его ролей
    // }

    // function hasRole($role){ //2изм
    //    return in_array( $role, array_pluck($this->roles->toArray(), 'name')); //toArray() уже не массив обьекта а двумерный массив, а array_pluck cделаеть массив где буду тольолк имена ролей, приставка in_ 'если найдено в массиве'
    // }

}
