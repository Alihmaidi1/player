<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\repo\interfaces\player as playerinterface;
use App\http\Requests\api\player\store as storerequest;
use App\http\Requests\api\player\delete as deleterequest;
use App\http\Requests\api\player\update as updaterequest;
use App\http\Requests\api\player\find as findrequest;
class player extends Controller
{
    public $player;
    public function __construct(playerinterface $player)
    {

        $this->player=$player;

    }
    public function store(storerequest $request){

        try{

            $data=$this->player->store($request);
            return response()->json(['message'=>'success','status'=>200,"data"=>$data]);

        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);

        }

    }


    public function delete(deleterequest $request){


        try{

            $data=$this->player->delete($request->id);
            return response()->json(['message'=>"success",'data'=>$data,'status'=>200]);

        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);


        }


    }


    public function update(updaterequest $request){


        try{

            $data=$this->player->update($request);
            return response()->json(['message'=>"success",'data'=>$data,'status'=>200]);

        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);


        }




    }



    public function find(findrequest $request){


        try{

            $data=$this->player->find($request->id);
            return response()->json(['message'=>"success",'data'=>$data,'status'=>200]);


        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);


        }


    }



}
