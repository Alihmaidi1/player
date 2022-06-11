<?php

namespace App\repo\classes;

use App\Models\special_postion;
use App\repo\interfaces\special as specialinterface;
class special implements specialinterface{


    public function getAllSpecial()
    {
        return special_postion::all();
    }

    public function store($request)
    {

       return  special_postion::create([

            "position"=>$request->position,
            "player_id"=>$request->player_id,
            "match_id"=>$request->match_id


        ]);


    }


    public function delete($id){

        $special=special_postion::findOrFail($id);
        $temp=$special;
        $special->delete();
        return $temp;
    }


    public function find($id){

        return special_postion::findOrFail($id);


    }


    public function update($request)
    {

        $special=$this->find($request->id);
        $special->position=$request->position;
        $special->player_id=$request->player_id;
        $special->match_id=$request->match_id;
        $special->save();
        return $special;

    }
}
