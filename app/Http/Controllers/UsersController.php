<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function create(){
        return view("users.create");
    }

    public function show(User $user){
        return view('users.show',compact('user'));
    }

    public function store(Request $request)
    {
        /*
        laravel 提供的数据验证方法。validate 方法接收两个参数，第一个参数为用户的输入数据，第二个参数为该输入数据的验证规则。
        unique:users 唯一性验证
        */
        $this->validate($request, [
            'name' => 'required|unique:users|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        return;
    }
}
