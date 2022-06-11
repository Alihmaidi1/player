<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\repo\interfaces\matches as matchesinterface;
use App\repo\interfaces\team as teaminterface;
use Illuminate\Http\Request as HttpRequest;
use App\http\requests\match\store as storerequest;
use App\http\requests\match\update as updaterequest;

class matches extends Controller
{

    public $match;
    public $team;
    public function __construct(matchesinterface $match,teaminterface $team)
    {
        $this->team=$team;
        $this->match=$match;

    }
    public function index(){


        $matches=$this->match->getAllMatches();
        return view("admin.match.index",compact("matches"));
    }


    public function create(){

        $teams=$this->team->getAllTeam();
        return view("admin.match.create",compact("teams"));
    }



    public function store(storerequest $request){

        try{

            $this->match->store($request);
            return redirect()->route("matches.index");

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>$ex->getMessage()]);

        }

    }


    public function delete($id){

        try{

            $this->match->delete($id);
            return redirect()->back();

        }catch(\Exception $ex){

            return redirect()->back()->withErrors(["error"=>$ex->getMessage()]);

        }


    }


    public function edit($id){


        try{

            $match=$this->match->find($id);
            $teams=$this->team->getAllTeam();

            return view("admin.match.edit",compact("match","teams"));



        }catch(\Exception $ex){

            return redirect()->back()->withErrors(['error'=>$ex->getMessage()]);

        }



    }


    public function update(updaterequest $request){


        try{
            $this->match->update($request);
            return redirect()->route("matches.index");


        }catch(\Exception $ex){


            return redirect()->back()->withErrors(['error'=>$ex->getMessage()]);
        }


    }



}
