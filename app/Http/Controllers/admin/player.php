<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Providers\repo;
use App\repo\interfaces\player as playerinterface;
use App\repo\interfaces\team as teaminterface;
use Illuminate\Http\Request as HttpRequest;
use App\http\requests\player\store as storerequest;
use App\http\requests\player\update as updaterequest;

class player extends Controller
{

    public $player;
    public $team;
    public function __construct(playerinterface $player,teaminterface $team)
    {

        $this->player=$player;
        $this->team=$team;
    }
    public function index(){

        $players=$this->player->getAllPlayer();
        return view("admin.player.index",compact("players"));
    }


    public function create(){

        $teams=$this->team->getAllTeam();
        return view("admin.player.create",compact("teams"));


    }

    public function store(storerequest $request){

        try{

            $this->player->store($request);
            return redirect()->route("player.index");



        }catch(\Exception $ex){
            return $ex->getMessage();
            return redirect()->back()->withErrors(["error"=>$ex->getMessage()]);
        }


    }



    public function delete($id){

        try{

            $this->player->delete($id);
            return redirect()->back();

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>$ex->getMessage()]);

        }



    }




    public function edit($id){

        try{

            $player=$this->player->find($id);
            $teams=$this->team->getAllTeam();
            return view("admin.player.edit",compact("player","teams"));


        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>$ex->getMessage()]);

        }


    }



    public function update(updaterequest $request){

        try{

            $this->player->update($request);
            return redirect()->route("player.index");

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(['error'=>$ex->getMessage()]);

        }


    }


}


