<?php

namespace App\Shop\Users;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    function users() { // 1 изм
    	return $this->belongsToMany('App\Shop\Users\User', 'user_roles', 'role_id', 'user_id'); // связь с пользователямию
    }
}
