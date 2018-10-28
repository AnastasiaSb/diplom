<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    // function dashboard(){  // 1 изменение
    // 	// $role = Role::find(1); // получили все данные с ролью с ID=1
    // 	// return $role->users;
    // 	// return \Auth::user()->roles; // узнаем роли залогиненого пользователя
    // 	// return var_dump( \Auth::user()->hasRole('admin'));	
    // 	return view('admin.dashboard'); //2изм
    // }
}
