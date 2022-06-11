<?php

namespace App\repo\classes;

use App\Models\team as ModelsTeam;
use App\repo\interfaces\team as teaminterface;
class team implements teaminterface{


    public function getAllTeam()
    {

        return ModelsTeam::all();
    }


    public function store($request)
    {


        $team=ModelsTeam::create([

            "name"=>$request->name
        ]);

        return $team;

    }

    public function delete($id){

        $team=ModelsTeam::findOrFail($id);
        $temp=$team;
        $team->delete();
        return $temp;

    }


    public function find($id)
    {

        return ModelsTeam::findOrFail($id);

    }

    public function update($request)
    {

        $team=ModelsTeam::findOrFail($request->id);
        $team->name=$request->name;
        $team->save();
        return $team;


    }

    public function paginate($number)
    {

        return ModelsTeam::paginate($number);
    }


    public function player($id)
    {

        return ModelsTeam::findOrFail($id)->players();

    }
}
