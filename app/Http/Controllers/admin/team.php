<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\team as ModelsTeam;
use Illuminate\Http\Request;
use App\repo\interfaces\team as teaminterface;
use App\Http\requests\team\store as storerequest;
use App\Http\requests\team\update as updaterequest;

class team extends Controller
{

    public $team;
    public function __construct(teaminterface $team)
    {

        $this->team=$team;
    }

    public function index(){

        $teams=$this->team->getAllTeam();

        return view('admin.team.index',compact("teams"));
    }



    public function create(){


        return view("admin.team.create");
    }


    public function store(storerequest $request){

        try{

            $this->team->store($request);
            return redirect()->route("team.index");

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(['error'=>$ex->getMessage()]);

        }

    }



    public function delete($id){


        try{

            $this->team->delete($id);
            return redirect()->back();
        }catch(\Exception $ex){

            return redirect()->back()->withErrors(['error'=>$ex->getMessage()]);

        }


    }


    public function edit($id){


        try{

            $team=$this->team->find($id);
            return view("admin.team.edit",compact("team"));
        }catch(\Exception $ex){
            return redirect()->back()->withErrors(['error'=>$ex->getMessage()]);
        }


    }



    public function update(updaterequest $request){

        try{

            $this->team->update($request);
            return redirect()->route("team.index");

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(['error'=>$ex->getMessage()]);

        }


    }




}
