<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\api\account\login as loginrequest;
class account extends Controller
{
    //

    public function login(loginrequest $request){

        try{

            $token=auth("api")->attempt(['email'=>$request->email,"password"=>$request->password]);

            if($token){

                $user=auth("api")->user();
                $user->token=$token;
            return response()->json(['message'=>'success','data'=>$user]);

            }else{

                return response()->json(['message'=>"the email or password is not correct","status"=>'401']);
            }

        }catch(\Exception $ex){

            return response()->json(['message'=>"we Have Error",'status'=>500]);

        }

    }



    public function logout(Request $request){

        try{

            auth('api')->logout();
            return response()->json(['message'=>'success','data'=>200]);


        }catch(\Exception $ex){

            return response()->json(['message'=>"we Have Error",'status'=>'500']);

        }





    }



}
