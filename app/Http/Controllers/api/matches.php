<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\repo\interfaces\matches as matchesinterface;
use App\Http\Requests\api\matches\store as storerequest;
use App\Http\Requests\api\matches\find as findrequest;
use App\Http\Requests\api\matches\update as updaterequest;
use App\Http\Requests\api\matches\delete as deleterequest;


class matches extends Controller
{

    public $match;
    public function __construct(matchesinterface $match)
    {

        $this->match=$match;

    }
    public function store(storerequest $request){

        try{

            $data=$this->match->store($request);
            return response()->json(['message'=>'success','status'=>200,"data"=>$data]);

        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);

        }

    }


    public function delete(deleterequest $request){


        try{

            $data=$this->match->delete($request->id);
            return response()->json(['message'=>"success",'data'=>$data,'status'=>200]);

        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);


        }


    }


    public function update(updaterequest $request){


        try{

            $data=$this->match->update($request);
            return response()->json(['message'=>"success",'data'=>$data,'status'=>200]);

        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);


        }




    }



    public function find(findrequest $request){


        try{

            $data=$this->match->find($request->id);
            return response()->json(['message'=>"success",'data'=>$data,'status'=>200]);


        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);


        }


    }



}
