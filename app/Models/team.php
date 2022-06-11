<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

    public $fillable=["name"];

    public function players(){

        return $this->hasMany("\App\Models\player","team_id");
    }



    public function team1(){

        return $this->hasMany("\App\Models\\matches","team1_id");


    }

    public function team2(){

        return $this->hasMany("\App\Models\\matches","team2_id");
    }

}
