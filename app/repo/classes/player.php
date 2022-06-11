<?php

namespace App\repo\classes;

use App\Models\player as ModelsPlayer;
use App\repo\interfaces\player as playerinterface;


class player implements playerinterface{


    public function getAllPlayer()
    {
        return ModelsPlayer::all();
    }

    public function store($request)
    {

        $player=ModelsPlayer::create([


            "name"=>$request->name,
            "age"=>$request->age,
            "position"=>$request->position,
            "team_id"=>$request->team_id

        ]);

        return $player;
    }



    public function delete($id)
    {

        $player=ModelsPlayer::findOrFail($id);
        $temp=$player;
        $player->delete();
        return $temp;

    }



    public function find($id)
    {


        return ModelsPlayer::findOrFail($id);
    }

    public function update($request)
    {

        $player=$this->find($request->id);
        $player->name=$request->name;
        $player->age=$request->age;
        $player->position=$request->position;
        $player->team_id=$request->team_id;
        $player->save();
        return $player;


    }

}
