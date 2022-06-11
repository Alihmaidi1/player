<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\user\login as requestlogin;
class account extends Controller
{

    public function index(){

        return view("admin.account.login");

    }


    public function register(){

        return view("admin.account.register");
    }


    public function login(requestlogin $request){
        try{

            $user=Auth::attempt(["email"=>$request->email,"password"=>$request->password]);
            if(!$user){
            return redirect()->back()->with(["message"=>"the email or password is not correct"]);

            }
            return redirect()->route("dashboard");
        }catch(\Exception $ex){

            return redirect()->back()->with(["message"=>"we have error"]);

        }


    }


    public function dashboard(){

        return view("admin.dashboard");
    }



    public function logout(){

        auth()->logout();
        return redirect()->route("loginindex");
    }

}
