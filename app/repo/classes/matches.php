<?php

namespace App\repo\classes;

use App\Models\matches as ModelsMatches;
use App\repo\interfaces\matches as matchesinterface;
class matches implements matchesinterface{


    public function getAllMatches()
    {
        return ModelsMatches::all();
    }

    public function store($request)
    {

        $match=ModelsMatches::create([

            "team1_id"=>$request->team1_id,
            "team2_id"=>$request->team2_id,
            "date"=>$request->date


        ]);

        return $match;
    }


    public function delete($id){

    $match=ModelsMatches::findOrFail($id);
    $temp=$match;
    $match->delete();
    return $temp;


    }



    public function find($id)
    {

        return ModelsMatches::findOrFail($id);


    }
    public function update($request)
    {

        $match=$this->find($request->id);
        $match->team1_id=$request->team1_id;
        $match->team2_id=$request->team2_id;
        $match->date=$request->date;
        $match->save();
        return $match;
    }
}
