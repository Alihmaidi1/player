<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\repo\interfaces\special as specialinterface;
use App\repo\interfaces\matches as matchesinterface;
use App\repo\interfaces\player as playerinterface;
use App\http\requests\special\store as storerequest;
use App\http\requests\special\update as updaterequest;

class special extends Controller
{
    //
    public $player;
    public $matches;
    public $special;
    public function __construct(specialinterface $special,matchesinterface $matches,playerinterface $player)
    {
        $this->matches=$matches;
        $this->player=$player;
        $this->special=$special;
    }
    public function index(){

        $speicals=$this->special->getAllSpecial();
    return view("admin.special.index",compact("speicals"));
    }




    public function create(){

        $players=$this->player->getAllPlayer();
        $matches=$this->matches->getAllMatches();
        return view("admin.special.create",compact("players","matches"));

    }


    public function store(storerequest $request){

        try{

            $this->special->store($request);
            return redirect()->route("special.index");


        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>$ex->getMessage()]);
        }


    }



    public function delete($id){

        try{

            $this->special->delete($id);
            return redirect()->back();

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(['error'=>$ex->getMessage()]);
        }



    }

    public function edit($id){

        try{

            $players=$this->player->getAllPlayer();
            $matches=$this->matches->getAllMatches();
            $special=$this->special->find($id);
            return view("admin.special.edit",compact("players","matches","special"));




        }catch(\Exception $ex){

            return redirect()->back()->withErrors(['error'=>$ex->getMessage()]);

        }

    }


    public function update(updaterequest $request){


        try{


            $this->special->update($request);
            return redirect()->route("special.index");


        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>$ex->getMessage()]);

        }


    }

}
