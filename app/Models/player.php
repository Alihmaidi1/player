<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;

    public $fillable=["name","age","position","team_id"];


    public function team(){

        return $this->belongsTo("\App\Models\\team","team_id");
    }

    public function special(){

        return $this->hasOne("\App\Models\player","player_id");
    }



}
