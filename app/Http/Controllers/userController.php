<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    public function create(Request $request)
    {
        $validation=$request->validate([
            'nama'=>'required',
            'email'=>'required|unique:users|email:rfc,dns',
            'password'=>'required',
            'level'=>'required',
        ]);

        $validation['password']=bcrypt($request->password);
        User::create($validation);
    }

    public function delete(User $user)
    {
        $user->delete();
    }

    public function update(User $user, Request $request)
    {
        $validation=$request->validate([
            'nama'=>'required',
            'email'=>'required|unique:users|email:rfc,dns',
            'level'=>'required',
        ]);
        $user->update($validation);
    }

    public function index(){
        return view('user.index', ['title'=>'user']);
    }
}
