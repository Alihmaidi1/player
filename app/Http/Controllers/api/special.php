<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\repo\interfaces\special as specialinterface;
use App\Http\requests\api\special\store as storerequest;
use App\Http\requests\api\special\delete as deleterequest;
use App\Http\requests\api\special\find as findrequest;
use App\Http\requests\api\special\update as updaterequest;

class special extends Controller
{

    public $special;
    public function __construct(specialinterface $special)
    {

        $this->special=$special;

    }
    public function store(storerequest $request){

        try{

            $data=$this->special->store($request);
            return response()->json(['message'=>'success','status'=>200,"data"=>$data]);

        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);

        }

    }


    public function delete(deleterequest $request){


        try{

            $data=$this->special->delete($request->id);
            return response()->json(['message'=>"success",'data'=>$data,'status'=>200]);

        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);


        }


    }


    public function update(updaterequest $request){


        try{

            $data=$this->special->update($request);
            return response()->json(['message'=>"success",'data'=>$data,'status'=>200]);

        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);


        }




    }



    public function find(findrequest $request){


        try{

            $data=$this->special->find($request->id);
            return response()->json(['message'=>"success",'data'=>$data,'status'=>200]);


        }catch(\Exception $ex){

            return response()->json(['message'=>'we have error','status'=>500]);


        }


    }



}
