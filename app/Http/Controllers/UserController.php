<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller

{
    function login(Request $req){
        $user = DB::table("users")->where('email', $req->email)->first();
        if(!$user){
            return "Email is Incorrect";
        }
        $passCheck = Hash::check($req->password, $user->password);
        if(!$passCheck){
            return "Password is incorrect";
        }
        else {
            $req->session()->put('user', $user);
            return redirect('/home');
        }
    }
}
