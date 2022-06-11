<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\repo\interfaces\team as teaminterface;
use App\http\Requests\api\team\store as storerequest;
use App\http\Requests\api\team\update as updaterequest;
use App\http\Requests\api\team\delete as deleterequest;
use App\http\Requests\api\team\find as findrequest;


class team extends Controller
{

    public $team;
    public function __construct(teaminterface $team)
    {

        $this->team=$team;

    }
    public function store(storerequest $request){

        try{

            $data=$this->team->store($request);
            return response()->json(['message'=>'success','status'=>200,"data"=>$data]);

        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);

        }

    }


    public function delete(deleterequest $request){


        try{

            $data=$this->team->delete($request->id);
            return response()->json(['message'=>"success",'data'=>$data,'status'=>200]);

        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);


        }


    }


    public function update(updaterequest $request){


        try{

            $data=$this->team->update($request);
            return response()->json(['message'=>"success",'data'=>$data,'status'=>200]);

        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);


        }




    }



    public function find(findrequest $request){


        try{

            $data=$this->team->find($request->id);
            return response()->json(['message'=>"success",'data'=>$data,'status'=>200]);


        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);


        }


    }
}
